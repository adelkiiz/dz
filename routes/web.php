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
    return view('welcome');
});



Route::post('/bien/add', 'App\Http\Controllers\BienController@insert_bien')->name('bien.add');
Route::get('bien', 'App\Http\Controllers\BienController@show')->name('bien');