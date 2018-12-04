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
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('test',function (){
    return view('admin.theloai.index');
});
Route::get('/','Client\HomeController@index')->name('theloai.index');
Route::get('/category/{id}','Client\CategoryController@index')->name('client.category.index');
Route::post('/ajax_load','Client\HomeController@ajax_load');
//route admin
Route::group(['prefix'=>'admin'],function (){
    //rout the loai
    // admin/theloai/index
    Route::group(['prefix'=>'theloai'],function(){
       Route::get('index','Admin\TheLoaiController@index')->name('theloai.index');
       Route::get('edit/{id}','Admin\TheLoaiController@edit')->name('theloai.edit');
       Route::post('update/{id}','Admin\TheLoaiController@update')->name('theloai.update');
       Route::get('create','Admin\TheLoaiController@create')->name('theloai.create');
       Route::post('store','Admin\TheLoaiController@store')->name('theloai.store');
       Route::get('destroy/{id}','Admin\TheLoaiController@destroy')->name('theloai.destroy');
    });
    //route loai tin
    Route::group(['prefix'=>'loaitin'],function(){
        Route::get('index','Admin\LoaiTinController@index')->name('loaitin.index');
        Route::get('edit/{id}','Admin\LoaiTinController@edit')->name('loaitin.edit');
        Route::post('update/{id}','Admin\LoaiTinController@update')->name('loaitin.update');
        Route::get('create','Admin\LoaiTinController@create')->name('loaitin.create');
        Route::post('store','Admin\LoaiTinController@store')->name('loaitin.store');
        Route::get('destroy/{id}','Admin\LoaiTinController@destroy')->name('loaitin.destroy');

    });
    //route tin tuc
    Route::group(['prefix'=>'tintuc'],function(){
        Route::get('index','Admin\TinTucController@index')->name('tintuc.index');
        Route::get('edit','Admin\TinTucController@edit')->name('tintuc.edit');
        Route::get('add','Admin\TinTucController@add')->name('tintuc.add');
    });
    //route user
    Route::group(['prefix'=>'user'],function(){
        Route::get('index','Auth/Controller@index')->name('user.index');
        Route::get('edit','Auth/Controller@edit')->name('user.edit');
        Route::get('add','Auth/Controller@add')->name('user.add');
    });
    // route slide
    Route::group(['prefix'=>'slide'],function(){
        Route::get('index','SlideController@index')->name('slide.index');
        Route::get('edit','SlideController@edit')->name('slide.edit');
        Route::get('add','SlideController@add')->name('slide.add');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');