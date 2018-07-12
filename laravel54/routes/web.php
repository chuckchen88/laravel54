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


//文章列表
Route::get('/posts','\App\Http\Controllers\PostController@index');
//创建文章
Route::get('/posts/create','\App\Http\Controllers\PostController@create');
Route::post('/posts','\App\Http\Controllers\PostController@store');
//文章详情
Route::get('/posts/{post}','\App\Http\Controllers\PostController@show');
//编辑文章
Route::get('/posts/{post}/edit','\App\Http\Controllers\PostController@edit');
Route::put('/posts/{post}','\App\Http\Controllers\PostController@update');
//删除文章
Route::get('/posts/delete','\App\Http\Controllers\PostController@delete');
//图片上传
Route::post('/posts/image/upload','\App\Http\Controllers\PostController@imageUpload');

