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

Route::get('/', function () {
    return view('welcome');
});

//追加
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});


//3.「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
Route::group(['prefix' => '○○'], function() {
    Route::get('XXX','Admin\AAAController@bbb');
});


//4-1.admin/profile/createにアクセスしたらProfileController の add Actionに割り当て
Route::group(['prefix' => '××'], function() {
    Route::get('Admin/profile/create','Admin\ProfileController@add');
});


//4-2.admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当て
Route::group(['prefix' =>'??'], function() {
    Route::get('Admin/profile/edit','Admin\ProfileController@edit');
});