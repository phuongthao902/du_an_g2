<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class Brandproduct extends Controller
{
    public function AuthLogin(){
        $id = Session::get('id');
        if($id){
           return Redirect::to('dashboard');
        }else{
           return Redirect::to('admin')->send();
        }
    }

    public function add_brand_product(){
        $this->AuthLogin();
        return view('admin.add_brand_product');
    }
    public function all_brand_product(){
        $this->AuthLogin();
        $all_brand_product = DB::table('tbl_brand')->get();
        $manage_brand_product = view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
        return view('admin_layout')->with('admin.all_brand_product',$manage_brand_product);
    }
    public function save_brand_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request-> brand_product_name;
        DB::table('tbl_brand')->insert($data);
        Session::put('message','Add brand successfully');
        return Redirect::to('add-brand-product');
    }
    public function unactive_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','failed brand activation');
        return Redirect::to('all-brand-product');
    }
    public function active_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','successful brand activation');
        return Redirect::to('all-brand-product');
    }
    public function edit_brand_product($brand_product_id){
        $this->AuthLogin();
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id',$brand_product_id)->get();
        $manage_brand_product = view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product);
        return view('admin_layout')->with('admin.edit_brand_product',$manage_brand_product);
    }
    public function update_brand_product(Request $request,$brand_product_id){
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request->brand_product_name;


        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);
        Session::put('message','Update product brand successful');
        return Redirect::to('all-brand-product');
    }
    public function delete_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','Delete product brand successful');
        return Redirect::to('all-brand-product');
    }
// End function Admin Page
    public function show_brand_home($brand_id){
        $cate_product = DB::table('tbl_category')->where('category_status','0')->orderBy('category_id','desc')->get();

        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderBy('brand_id','desc')->get();

        $brand_by_id = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('tbl_product.brand_id',$brand_id)->get();

        $brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_id',$brand_id)->limit(1)->get();

        return view('pages.brand.show_brand')->with('category',$cate_product)->with('brand',$brand_product)->with('brand_by_id',$brand_by_id)->with('brand_name',$brand_name);
    }
}
