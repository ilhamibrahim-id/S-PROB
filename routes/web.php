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
    return view('foruser.dashboard');
});
Route::get('/kategori', function () {
    return view('foruser.kategori');
});
Route::get('/detail', function () {
    return view('foruser.detailpost');
});

Route::get('/login', function () {
    return view('login.login');
});
Route::get('/register', function () {
    return view('login.register');
});
Route::get('/forgot', function () {
    return view('Login.forgotpw');
});

