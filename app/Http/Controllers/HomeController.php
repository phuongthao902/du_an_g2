<?php

namespace App\Http\Controllers;

use App\Models\productModel;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
//use\Illuminate\Database\Eloquent\Model;
use App\Models\categoryModel;
session_start();
class HomeController extends Controller
{
    public function index()
    {
        // $cate_product=DB::table('tbl_category')->where('category_status','0')->orderby('category_id','desc')->get();
        // $brand_product=DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        // return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product);

$product=productModel::all();
$category=categoryModel::all();
return view('pages.home',compact(['product','category']));

    }
}
