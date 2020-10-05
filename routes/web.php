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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'namespace'=>'admin', 'middleware'=>'auth'], function(){
    Route::resource('province','ProvinceController');
    
    Route::resource('car','CarController');
    Route::post('car/search','CarController@search')->name('admin.car.search');

    Route::delete('car/{id}/delete','CarController@car_delete')->name('admin.car.delete');

    Route::get('car_image','ImageController@index')->name('admin.car_image.index');
    Route::get('car_image/{id}','ImageController@create')->name('admin.car_image.create');
    Route::post('car_image/{id}/save','ImageController@store')->name('admin.car_image.store');
    Route::get('car_image/{id}/show','ImageController@show')->name('admin.car_image.show');
    Route::get('car_image/{car_id}/show/{image_id}/edit','ImageController@edit')->name('admin.car_image.edit');
    Route::put('car_image/{car_id}/show/{image_id}/update','ImageController@update')->name('admin.car_image.update');
    Route::delete('car_image/{car_id}/show/{image_id}/destroy','ImageController@destroy')->name('admin.car_image.destroy');
    Route::post('car_image/search','ImageController@search')->name('admin.car_image.search');


    //users
    Route::resource('users','UserController');

});


Route::get('/','FrontendController@index')->name('inicio');
if(!Request::is('admin*')){
    Route::get('car/{car}/{id}','FrontendController@car')->name('inicio.car');
}

if(!Request::is('admin*') || !Request::is('car*')){
    Route::get('search_stock/{city}','FrontendController@province')->name('inicio.province');
    Route::get('arriving_soon','FrontendController@arriving_soon')->name('inicio.arriving_soon');
    Route::get('contact','FrontendController@contact')->name('inicio.contact');
    Route::post('send_email','FrontendController@email')->name('inicio.email');
    Route::get('admin/secret/access/newaccess','FrontendController@newAccess')->name('inicio.newAcess');
    Route::post('admin/secret/access/store','FrontendController@store')->name('inicio.store');
}

