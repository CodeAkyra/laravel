<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('layout');
// });

// Route::get('/home', 'RouteController@home');
// Route::get('/calculator', 'RouteController@about');

// Route::get('/home', [RouteController::class, 'home']);
// Route::get('/calculator', [RouteController::class, 'calculator']);


// Route::post('/register', function () {
//     return 'Thank you';
// });

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);


// LARAVEL 8 HOURS COURSE

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
