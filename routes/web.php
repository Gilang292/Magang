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


Route::get('/gilang', function () {
    return view('gilang1');
});

Route::get('/sastra', function () {
    return view('sastra');
});

Route::get('admin', function(){
    return view('admin.index');
});

Auth::routes();

Route::resource('admin/users', 'AdminUsersController');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/barang','AdminBarangsController');

Route::resource('admin/komputer','AdminKomputersController');

Route::resource('admin/laporan','LaporanController');

Route::resource('admin/permasalahan','PermasalahanController');

Route::resource('admin/penjelasan','PenjelasanController');
