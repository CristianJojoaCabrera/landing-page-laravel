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

Route::resource('users',\App\Http\Controllers\UserController::class,['only'=>['store','update']]);
Route::get('/','App\Http\Controllers\LandingPageController@index')->name('/');
Route::get('get_cities/{deparment_id}','App\Http\Controllers\LandingPageController@get_cities')->name('get_cities');
Route::get('landing_pages/exportar/users/excel', 'App\Http\Controllers\LandingPageController@export_users_in_excel');
Route::get('landing_pages/exportar/users/winners/excel', 'App\Http\Controllers\LandingPageController@export_users_winners_in_excel');
