<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('common_folder.data_table');
});



Route::auth();

Route::get('/home', 'HomeController@index');

// Main category add by obydul date 24-7-16

Route::get('category-create-form','CategoryController@Main_cat_show');
Route::post('category-store','CategoryController@store');
Route::get('category-main-category-delete/{id}','CategoryController@delete');

// Sub category add by obydul date 24-7-16
Route::post('sub-category-store','CategoryController@sub_cat_store');
Route::get('sub-category-delete/{id}','CategoryController@sub_cat_delete');
Route::post('sub-category-update/{id}','CategoryController@sub_cat_update');

//slider image controlling
Route::get('slider-slider-form','SliderController@slider_form');
Route::post('slider-slider-image-store','SliderController@slider_upload');
Route::post('slider-slider-update/{id}','SliderController@slider_update');
Route::get('slider-slider-delete/{id}','SliderController@slider_delete');


