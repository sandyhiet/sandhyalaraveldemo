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

/*****************FRONT ROUTE START****************/

//All hotel listing Routes

Route::get('/', 'Hotel\hotelsController@index');

//Hotel details Routes
Route::get('hoteldetail/{id}', ['as' => 'hoteldetail.show', 'uses' => 'Hotel\hotelsController@showAllComments'] );

//post comments Routes
Route::post('postComments', 'Hotel\hotelsController@postComments');

/*****************FRONT ROUTE END****************/



/*****************ADMIN ROUTE START****************/

// Add hotel Routes
Route::get('admin', 'Admin\adminController@index');
Route::post('admin', 'Admin\adminController@addHotel');

// Calling Authenication Routes
Route::auth();

/*****************ADMIN ROUTE END****************/