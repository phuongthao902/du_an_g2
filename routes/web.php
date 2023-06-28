<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerName;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('layout');
});
Route::get('/', 'HomeController@index');
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');

Route::get('/profile', 'App\Http\Controllers\ProfileController@index');


Route::get('/', [ControllerName::class,'index']);
Route::resource('users','UsersController')->only(['index','show']);

Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('edit-users','App\Http\Controllers\UserController@edit_user');
Route::get('all-users','App\Http\Controllers\UserController@Usersindex');
Route::post('postEditUsers','App\Http\Controllers\UserController@postEditUsers');
Route::get('deleteUsers','App\Http\Controllers\UserController@deleteUsers');

//backend
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');
Route::post('/register', 'App\Http\Controllers\AdminController@register')->name('register');

Route::get('/reg',function(){
return view('admin_register');
});
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');
//Route::get('/register', 'App\Http\Controllers\AdminController@register');

Route::get('/admin_login', function () {
})->middleware('auth', 'verified', 'check.role:admin_login');


//CategoryProduct
Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product');
Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product');
Route::get('/unactive-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@active_category_product');
Route::post('/save-category-product', 'App\Http\Controllers\CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@update_category_product');

//BrandProduct
Route::get('/add-brand-product', 'App\Http\Controllers\Brandproduct@add_brand_product');
Route::get('/edit-brand-product/{brand_product_id}', 'App\Http\Controllers\Brandproduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}', 'App\Http\Controllers\Brandproduct@delete_brand_product');
Route::get('/all-brand-product', 'App\Http\Controllers\Brandproduct@all_brand_product');
Route::get('/unactive-brand-product/{brand_product_id}', 'App\Http\Controllers\Brandproduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}', 'App\Http\Controllers\Brandproduct@active_brand_product');
Route::post('/save-brand-product', 'App\Http\Controllers\Brandproduct@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}', 'App\Http\Controllers\Brandproduct@update_brand_product');

//Origin
Route::get('/add-origin','App\Http\Controllers\OriginController@add_origin_product');
Route::post('/save-origin-product', 'App\Http\Controllers\OriginController@save_origin_product');
Route::get('/all-origin-product', 'App\Http\Controllers\OriginController@all_origin_product');
Route::get('/edit-origin-product/{origin_product_id}', 'App\Http\Controllers\OriginController@edit_origin_product');
Route::post('/update-origin-product/{origin_product_id}', 'App\Http\Controllers\OriginController@update_origin_product');
Route::get('/unactive-origin-product/{origin_product_id}', 'App\Http\Controllers\OriginController@unactive_origin_product');
Route::get('/active-origin-product/{origin_product_id}', 'App\Http\Controllers\OriginController@active_origin_product');

//Order

Route::get('/add-order','App\Http\Controllers\OrderController@add_order');
Route::post('/save-order-product','App\Http\Controllers\OrderController@save_order_product');
Route::get('/all-order-product', 'App\Http\Controllers\OrderController@all_order_product');
Route::get('/edit-order-product/{order_product_id}', 'App\Http\Controllers\OrderController@edit_order_product');
Route::post('/update-order-product/{order_product_id}', 'App\Http\Controllers\OrderController@update_order_product');
Route::get('/unactive-order-product/{order_product_id}', 'App\Http\Controllers\OrderController@unactive_order_product');
Route::get('/active-order-product/{order_product_id}', 'App\Http\Controllers\OrderController@active_order_product');
Route::get('/delete-order-product/{order_product_id}', 'App\Http\Controllers\ProductController@delete_order_product');

//Product
Route::get('/add-product', 'App\Http\Controllers\ProductController@add_product');
Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product');
Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'App\Http\Controllers\ProductController@delete_product');
Route::get('/unactive-product/{product_id}', 'App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'App\Http\Controllers\ProductController@active_product');
Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}', 'App\Http\Controllers\ProductController@update_product');
Route::get('/detail-product/{product_id}', 'App\Http\Controllers\ProductController@details_product');

//Route::get('/show_details', 'App\Http\Controllers\ProductController@show_details');

//Authentication roles
Route::get('/register-auth', 'App\Http\Controllers\AuthController@register_auth');
Route::get('/login-auth', 'App\Http\Controllers\AuthController@login_auth');
Route::get('/logout-auth', 'App\Http\Controllers\AuthController@logout_auth');

Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/login', 'App\Http\Controllers\AuthController@login');

Route::post('/register1', 'App\Http\Controllers\AuthController@register');



