<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/','[控制器]@[行为]');

//Route::get('/posts','\App\Http\Controllers\PostController@index');

/*
get post put delete any match
 */


//路由参数
//Route::get('/posts/{id}','\App\Http\Controllers\PostController@index');

//方法
/*function index($id){
    //code...
}*/

//分组
/*Route::group(['prefix' => 'posts'],function(){
    Route::get('/{id}','\App\Http\Controllers\PostController@index');
});
*/

//用户模块
//注册页面
Route::get('/register','\App\Http\Controllers\RegisterController@index');
//注册行为
Route::post('/register','\App\Http\Controllers\RegisterController@Register');
//登录页面
Route::get('/login','\App\Http\Controllers\LoginController@index');
//登录行为
Route::post('/login','\App\Http\Controllers\LoginController@login');
//登出行为
Route::get('/logout','\App\Http\Controllers\LoginController@logout');
//个人设置页面
Route::get('/user/me/setting','\App\Http\Controllers\UserController@setting');
//个人设置操作
Route::post('/user/me/setting','\App\Http\Controllers\UserController@settingStore');



//文章列表
Route::get('/posts','\App\Http\Controllers\PostController@index');
//创建文章
Route::get('/posts/create','\App\Http\Controllers\PostController@create');
Route::post('/posts','\App\Http\Controllers\PostController@store');

//搜索结果页
Route::get('/posts/search','\App\Http\Controllers\PostController@search');

//文章详情
Route::get('/posts/{post}','\App\Http\Controllers\PostController@show');
//编辑文章
Route::get('/posts/{post}/edit','\App\Http\Controllers\PostController@edit');
Route::put('/posts/{post}','\App\Http\Controllers\PostController@update');
//删除文章
Route::get('/posts/{post}/delete','\App\Http\Controllers\PostController@delete');
//图片上传
Route::post('/posts/image/upload','\App\Http\Controllers\PostController@imageUpload');
//文章评论
Route::post('/posts/{post}/comment','\App\Http\Controllers\PostController@comment');
//文章赞
Route::get('/posts/{post}/zan','\App\Http\Controllers\PostController@zan');
//文章取消赞
Route::get('/posts/{post}/unzan','\App\Http\Controllers\PostController@unzan');

