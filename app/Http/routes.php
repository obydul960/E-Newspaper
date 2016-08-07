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
    return view('common_folder.editor');
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
Route::get('slider-form','SliderController@slider_form');
Route::post('slider-image-store','SliderController@slider_upload');
Route::post('slider-update/{id}','SliderController@slider_update');
Route::get('slider-delete/{id}','SliderController@slider_delete');

// news insert update delete by obydul date:31-7-16
Route::get('news-create','NewsController@create');
Route::get('news-category-show','NewsController@sub_category');
Route::post('news-contain-store','NewsController@news_store');
Route::get('news-show','NewsController@news_show');
Route::get('news-show-delete/{id}','NewsController@news_delete');
Route::get('news-edit-form/{id}','NewsController@edit_news');
Route::post('news-update/{id}','NewsController@news_update');

Route::get('backing-news','NewsController@backing_news_form');
Route::post('backing-news-store','NewsController@backing_news_store');
Route::post('backing-news-update/{id}','NewsController@backing_news_update');
Route::get('backing-news-delete/{id}','NewsController@backing_news_delete');


// fontend layout controll by obydul date:6-8-16

Route::get('fontend-news','FontendNewsController@view');
Route::get('fontend-details/{id}','FontendNewsController@fontend_details');
Route::get('category-details/{id}','FontendNewsController@category_details');


// Add controll by obydul date:7-8-16
Route::get('add-form','AddController@create');


