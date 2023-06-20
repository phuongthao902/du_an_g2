<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class ProductController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('id');
        if($admin_id){
           return Redirect::to('dashboard');
        }else{
           return Redirect::to('admin')->send();
        }
    }
    public function add_product(){
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderBy('brand_id','desc')->get();
        $origin_product = DB::table('tbl_origin')->orderBy('origin_id','desc')->get();
        return view('admin.add_product',compact('cate_product','brand_product','origin_product'));
    }
    public function all_product(){
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')
        ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
        ->join('tbl_order','tbl_order.order_id','=','tbl_order.product_id')
        ->join('tbl_origin','tbl_origin.origin_id','=','tbl_origin.product_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderBy('tbl_product.product_id','desc')->get();

        $manage_product = view('admin.all_product')->with('all_product',$all_product);

        $origin_product = DB::table('tbl_origin')->get();

        return view('admin_layout')->with('admin.all_product',$manage_product);
    }
    public function save_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request-> product_name;
        $data['unit_price'] = $request-> unit_price;
        $data['product_desc'] = $request-> product_desc;
        $data['category_id'] = $request-> product_cate;
        $data['brand_id'] = $request-> product_brand;
        $data['origin_id'] = $request-> origin;


        $get_image = $request->file('product_image');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;

        }
        DB::table('tbl_product')->insert($data);
        Session::put('message','Add product successfully');
        return Redirect::to('all-product');
    }
    public function unactive_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','failed product activation');
        return Redirect::to('all-product');
    }
    public function active_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','successful product activation');
        return Redirect::to('all-product');
    }
    public function edit_product($product_id){
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderBy('brand_id','desc')->get();
        $origin_product = DB::table('tbl_origin')->orderBy('origin_id','desc')->get();

        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();

        $manage_product = view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product)
        ->with('brand_product',$brand_product);

        return view('admin_layout')->with('admin.edit_product',$manage_product);
    }
    public function update_product(Request $request,$product_id){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
        $data['unit_price'] = $request->unit_price;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->brand_product;
        $data['origin_id'] = $request->origin_product;

        $get_image = $request->file('product_image');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;

        }


        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','Update product product successful');
        return Redirect::to('all-product');
    }


    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Delete product product successful');
        return Redirect::to('all-product');
    }
    //End Admin Page
    public function details_product($product_id){
        $cate_product = DB::table('tbl_category')->where('category_status','0')->orderBy('category_id','desc')->get();

        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderBy('brand_id','desc')->get();

        $details_product = DB::table('tbl_product')
        ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->join('tbl_origin','tbl_origin.origin_id','=','tbl_origin.product_id')

        ->where('tbl_product.product_id',$product_id)->get();

        foreach($details_product as $key => $value){
        $category_id = $value->category_id;
        }

        $related_product = DB::table('tbl_product')
        ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();

        return view('pages.product.show_details')->with('category',$cate_product)->with('brand',$brand_product)->with('product_details',$details_product)->with('relate',$related_product);
    }

}
