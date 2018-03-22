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

Route::get('admin/get_calliang_code','BasicInfoController@get_calling_code');   
Route::get('admin/get_country','BasicInfoController@get_country');   
Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    
    Route::get('/apartments/create', 'ApartmentController@createAparrtment')->name('getApartment');
    Route::get('/apartments/{id}/edit', 'ApartmentController@editAparrtment')->name('editApartment');
    Route::post('/apartments/{id}', 'ApartmentController@storeEditAparrtment')->name('storeEditAparrtment');
    Route::post('/apartments/create', 'ApartmentController@storeAparrtment')->name('postApartment');
    Route::post('/apartments/create/bedroom', 'ApartmentController@storeBedroomAparrtment')->name('postApartmentBedroom');
    Route::post('/apartments/room/create', 'ApartmentController@storeAparrtmentRoom')->name('postroomApartment');
    Route::post('/apartments/living/create', 'ApartmentController@storeAparrtmentLiving')->name('postlivingApartment');
    Route::get('/basicinfo', 'BasicInfoController@index')->name('getBasicinfo');
    Route::post('addproperty','BasicInfoController@store');
    Route::get('/features', 'featuresController@index')->name('getfeatures');
    Route::post('/', 'featuresController@create')->name('features');
    Route::get('/apartments', 'ApartmentController@index')->name('apartments');
    Route::delete('/apartments/delete', 'ApartmentController@delete')->name('apartmentsDelete');
    Route::get('/facilities', 'facilitiesController@index')->name('facilities');
    Route::post('/facilities/create', 'facilitiesController@store')->name('postFacilities');
    Route::get('/galleries', 'galleriesController@index')->name('galleries');
<<<<<<< HEAD
    Route::post('/galleries', 'galleriesController@store')->name('galleriesStore');
=======
    Route::post('/galleries/create', 'galleriesController@store')->name('galleriesStore');
>>>>>>> 6e74703ec946d7ca845f510b95f664b3fe83075d
});
Auth::routes();
