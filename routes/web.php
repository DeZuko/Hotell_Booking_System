<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


/* This controller responsible for normal pages */
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
// Route::get('/', [PagesController::class, 'index']);

// This controller responsible for Review post
Route::resource('posts', 'App\Http\Controllers\PostsController');

/* This controller responsible for registration */
Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::post('/register', 'App\Http\Controllers\RegisterController@store');

/* This controller responsible for login */
Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');


