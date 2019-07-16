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
Route::get('/siswa', function () {
    return view('/siswa');
});
Route::group(['middleware' => 'cors'],function(){
    Route::resource('/artikel', 'ArtikelAjax');
    Route::resource('/kategori', 'KategoriAjax');
    Route::resource('/tag', 'TagAjax');
});

Route::get('/', function () {
    return view('/index');

});
Route::get('/category', function () {
    return view('/category');
    
});
Route::get('/single', function () {
    return view('/single');
    
});
Route::get('/contact', function () {
    return view('/contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('artikel', 'ArtikelController');
Route::resource('categori', 'CategoriController');
Route::resource('tag', 'TagController');
