<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();
class OriginController extends Controller
{
    public function add_origin_product()
    {
        return view('admin.add_origin_product');
    }
    public function all_origin_product()
    {
        $all_origin_product = DB::table('tbl_origin')->get();
        $manage_origin_product = view('admin.all_origin_product')->with('all_origin_product', $all_origin_product);
        return view('admin_layout')->with('admin.all_origin_product', $manage_origin_product);

    }
    public function save_origin_product(Request $request)
    {
        $data = array();
        $data['name'] = $request->origin_product_name;
        $data['code'] = $request->origin_product_code;
        DB::table('tbl_origin')->insert($data);
        Session::put('message','Add origin successfully');
        return Redirect::to('all-origin-product');
    }
    public function unactive_origin_product($origin_product_id){
        //$this->AuthLogin();
        DB::table('tbl_origin')->where('origin_id',$origin_product_id)->update(['origin_status'=>1]);
        Session::put('message','failed catalog activation');
        return Redirect::to('all-origin-product');
    }
    public function active_origin_product($origin_product_id){
       // $this->AuthLogin();
        DB::table('tbl_origin')->where('origin_id',$origin_product_id)->update(['origin_status'=>0]);
        Session::put('message','Catalog activation successful');
        return Redirect::to('all-origin-product');
    }
    public function edit_origin_product($origin_product_id){
        //$this->AuthLogin();
        $edit_origin_product = DB::table('tbl_origin')->where('origin_id',$origin_product_id)->get();
        $manage_origin_product = view('admin.edit_origin_product')->with('edit_origin_product',$edit_origin_product);
        return view('admin_layout')->with('admin.edit_origin_product',$manage_origin_product);
    }
    public function update_origin_product(Request $request,$origin_product_id){
        //$this->AuthLogin();
        $data = array();
        $data['name'] = $request->origin_product_name;
        $data['code'] = $request->origin_product_code;

        DB::table('tbl_origin')->where('origin_id',$origin_product_id)->update($data);
        Session::put('message','Update origin product successful');
        return Redirect::to('all-origin-product');
    }
    public function delete_origin_product($origin_product_id){
        //$this->AuthLogin();
        DB::table('tbl_origin')->where('origin_id',$origin_product_id)->delete();
        Session::put('message','Delete origin product successful');
        return Redirect::to('all-origin-product');
    }
    //End function Admin Page
    public function show_origin_home($origin_id){
        $cate_product = DB::table('tbl_origin')->where('origin_status','0')->orderBy('origin_id','desc')->get();

        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderBy('brand_id','desc')->get();

        $origin_by_id = DB::table('tbl_product')->join('tbl_origin','tbl_product.origin_id','=','tbl_origin.origin_id')->where('tbl_product.origin_id',$origin_id)->get();

        $origin_name = DB::table('tbl_origin')->where('tbl_origin.origin_id',$origin_id)->limit(1)->get();

        return view('pages.origin.show_origin')->with('origin',$cate_product)->with('brand',$brand_product)->with('origin_by_id',$origin_by_id)->with('origin_name',$origin_name);
    }
}
