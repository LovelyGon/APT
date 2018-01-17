<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('admin/get_calling_code','BasicInfoController@get_calling_code');   
Route::get('admin/get_country','BasicInfoController@get_country');   
Route::group(['prefix' => 'admin','middleware' => ['auth']], function () { 
    Route::get('basicinfo', function () {
        return view('admin.basic_info');
    });
    Route:: post('addproperty','BasicInfoController@store');

    Route::get('features', 'featuresController@index')->name('getfeatures');
    Route::post('/', 'featuresController@create')->name('features');
    Route::get('apartments/create', function () {
        return view('admin.apartments-create');
    });
    
    Route::get('apartments', function () {
        return view('admin.apartments');
    });
    
    Route::get('admin/home', 'BasicInfoController@index');
    
    Route::get('admin/login', function () {
        return view('admin.login');
    });
    
    Route::get('facilities', function () {
        return view('admin.facilities');
    });
        Route::get('galleries', function () {
            return view('admin.galleries');
        });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
