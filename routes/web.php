<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

// Vehicles Routes
Route::get('vehicles', 'VehicleController@index');
Route::post('vehicles', 'VehicleController@store');
Route::get('vehicles/create', 'VehicleController@create');
Route::get('vehicles/{vehicle}', 'VehicleController@show');
Route::get('vehicles/{vehicle}/edit', 'VehicleController@edit');
Route::put('vehicles/{vehicle}', 'VehicleController@update');

// Accounts Routes
Route::get('accounts', 'AccountController@index');