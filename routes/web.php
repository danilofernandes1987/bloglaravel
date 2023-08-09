<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello-world','App\Http\Controllers\HelloWorldController@index');

//Route::resource('/users','App\Http\Controllers\UserController');

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin.')->group(function(){
    Route::prefix('artigos')->name('artigos.')->group(function(){
        Route::get('/index','ArtigoController@index')->name('index');
    });
});