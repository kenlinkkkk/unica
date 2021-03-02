<?php

use Illuminate\Support\Facades\Auth;
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
Route::prefix('/')->name('home.')->namespace('Home')->group(function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/dang-ky', 'HomeController@viewRegisterPage')->name('register');
    Route::get('/dang-nhap', 'HomeController@viewLoginPage')->name('login');
});

Auth::routes();

