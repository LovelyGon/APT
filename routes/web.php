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

Route::get('admin/home', function () {
    return view('admin.home');
});

Route::get('admin/basicinfo', function () {
    return view('admin.basic_info');
});

Route::get('admin/home', 'BasicInfoController@index');

Route::get('admin/login', function () {
    return view('admin.login');
});

