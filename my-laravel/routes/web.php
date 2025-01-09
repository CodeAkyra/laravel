<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

// Route::get('/', function () {
//     return view('layout');
// });

// Route::get('/home', 'RouteController@home');
// Route::get('/calculator', 'RouteController@about');

Route::get('/home', [RouteController::class, 'home']);
Route::get('/calculator', [RouteController::class, 'calculator']);
