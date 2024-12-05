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
// */

// Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');


Route::get('login', 'AuthController@showLoginForm')->name('login');
Route::post('login','AuthController@login');

Route::get('register', 'AuthController@showRegistrationForm')->name('register');
Route::post('register', 'AuthController@register');

Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');

Route::get('dashboard/inner', 'AuthController@innerPage')->name('inner');

Route::get('logout', 'AuthController@logout')->name('logout');