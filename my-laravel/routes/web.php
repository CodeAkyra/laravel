<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/home', [RouteController::class, 'home']);
Route::get('/about', [RouteController::class, 'about']);

// Route::get('/home', 'RouteController@home');
// Route::get('/about', 'RouteController@about');
