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
use Illuminate\Support\Facades\Auth;
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('test',function (){
    return view('admin.theloai.index');
});
Route::get('/','Client\HomeController@index')->name('theloai.index');
Route::get('/tintuc/{id}','Client\HomeController@show');
Route::get('/category/{id}','Client\CategoryController@index')->name('client.category.index');
Route::post('/ajax_load','Client\HomeController@ajax_load');
Route::post('/hotnews','Client\HomeController@hotnews');
//route admin
Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    //rout the loai
    // admin/theloai/index
    Route::get('/',function(){
        return view('admin.dashboard');
    });
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
        Route::get('edit/{id}','Admin\TinTucController@edit')->name('tintuc.edit');
        Route::get('add','Admin\TinTucController@create')->name('tintuc.add');
        Route::post('store','Admin\TinTucController@store')->name('tintuc.store');
        Route::post('update','Admin\TinTucController@update')->name('tintuc.update');
        Route::get('delete/{id}','Admin\TinTucController@destroy')->name('tintuc.destroy');
    });
    //route user
    Route::group(['prefix'=>'user','middleware'=>'author'],function(){
        Route::get('index','SuperAminController@index')->name('user.index');
        Route::get('edit/{id}','SuperAminController@edit')->name('user.edit');
        Route::post('update/{id}','SuperAminController@update')->name('user.update');
        Route::get('add','SuperAminController@create')->name('user.add');
        Route::post('store','SuperAminController@store')->name('user.store'); 
        Route::get('delete/{id}','SuperAminController@destroy')->name('user.destroy');
        Route::get('show/{id}','SuperAminController@show')->name('user.show');
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
