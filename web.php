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

Route::group(['prefix' =>'admin'], function(){
    Route::get('news/create','NewsController@add');
    //
    Route::get('profile/create','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
    
});
    /* prefixパラメータでadminディレクトリを纏め無名関数functionのの設定を
    'prefix =>admin'に適用させる。
    Route::getの記述に関しては、指定したアクセスに対して、コントローラーの
    Actionにそのデータを渡す。
    
    例)
    Route::get('profile/create'.'Admin\ProfileController@add');
    
    createにアクセスされた時、Admin\ProfileControllerのadd関数にアクセスを渡す。*/


