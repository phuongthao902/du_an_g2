<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();
class OrderController extends Controller
{
    public function add_order()
    {
        return view('admin.add_order');
    }
    public function all_order_product()
    {
        $all_order_product = DB::table('tbl_order')->get();
        $manage_order_product = view('admin.all_order_product')->with('all_order_product', $all_order_product);

        $order_product = DB::table('tbl_product')->get();

        return view('admin_layout')->with('admin.all_order_product', $manage_order_product);

    }
    public function save_order_product(Request $request)
    {
        $data = array();
        $data['user_id'] = $request->order_user;
        $data['quantity'] = $request->order_quantity;
        $data['address'] = $request->order_address;
        $data['total_price'] = $request->order_total_price;
        $data['status'] = $request->order_status;
        $data['bill_info'] = $request->order_bill_info;
        $data['product_id'] = $request->order_product;

        DB::table('tbl_order')->insert($data);
        Session::put('message','Add order successfully');
        return Redirect::to('all-order-product');
    }
    public function unactive_order_product($order_product){
        //$this->AuthLogin();
        DB::table('tbl_order')->where('order_id',$order_product)->update(['order_status'=>1]);
        Session::put('message','failed catalog activation');
        return Redirect::to('all-order-product');
    }
    public function active_order_product($order_product){
       // $this->AuthLogin();
        DB::table('tbl_order')->where('order_id',$order_product)->update(['order_status'=>0]);
        Session::put('message','Catalog activation successful');
        return Redirect::to('all-order-product');
    }
    public function edit_order_product($order_product){
        //$this->AuthLogin();
        $edit_order_product = DB::table('tbl_order')->where('order_id',$order_product)->get();
        $manage_order_product = view('admin.edit_order_product')->with('edit_order_product',$edit_order_product);
        return view('admin_layout')->with('admin.edit_order_product',$manage_order_product);
    }
    public function update_order_product(Request $request,$order_product){
        //$this->AuthLogin();
        $data = array();
        $data['user_id'] = $request->order_user;
        $data['quantity'] = $request->order_quantity;
        $data['address'] = $request->order_address;
        $data['total_price'] = $request->order_total_price;
        $data['status'] = $request->order_status;
        $data['bill_info'] = $request->order_bill_info;
        $data['product_id'] = $request->pro_product;

        DB::table('tbl_order')->where('order_id',$order_product)->update($data);
        Session::put('message','Update order successful');
        return Redirect::to('all-order-product');
    }
    public function delete_order_product($order_product){
        //$this->AuthLogin();
        DB::table('tbl_order')->where('order_id',$order_product)->delete();
        Session::put('message','Delete order successful');
        return Redirect::to('all-order-product');
    }
    //End function Admin Page
    public function show_order_home($order_id){
        $cate_product = DB::table('tbl_order')->where('order_status','0')->orderBy('order_id','desc')->get();

        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderBy('brand_id','desc')->get();

        $order_by_id = DB::table('tbl_product')->join('tbl_order','tbl_product.order_id','=','tbl_order.order_id')->where('tbl_product.order_id',$order_id)->get();

        $order_name = DB::table('tbl_order')->where('tbl_order.order_id',$order_id)->limit(1)->get();

        return view('pages.order.show_order')->with('order',$cate_product)->with('brand',$brand_product)->with('order_by_id',$order_by_id)->with('order_name',$order_name);
    }
}
