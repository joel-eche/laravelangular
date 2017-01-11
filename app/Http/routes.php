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
    return view('index');
});

Route::get('/api/supplier/{id?}','SupplierController@index');
Route::post('/api/supplier','SupplierController@store');
Route::post('/api/supplier/{id}','SupplierController@update');
Route::delete('/api/supplier/{id}','SupplierController@destroy');