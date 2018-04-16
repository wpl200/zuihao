<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// 路由
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('welcome');
});



//前台首页
Route::controller('/home/index','Home\IndexController');
//
//前台登录路由组
Route::controller('/home/login','Home\LoginController');
Route::group(['middleware'=>'log'],function(){
  
});



//后台登录路由组 
Route::controller('/admin/login','Admin\LoginController');
Route::group(['middleware'=>'login'],function(){
    //个人资料
    Route::resource('/admin/person','Admin\PersonController');
     //后台用户管理路由
    Route::resource('/admin/users','Admin\UsersController');
    //后台商品管理路由
    Route::resource('/admin/goods','Admin\GoodsController');
    //后台商品管理-分类路由
    Route::resource('/admin/type','Admin\TypeController');
    //后台用户收藏
    Route::resource('/admin/enshrine','Admin\EnshrineController');
    //后台订单管理
    Route::resource('/admin/order','Admin\OrderController');
});

