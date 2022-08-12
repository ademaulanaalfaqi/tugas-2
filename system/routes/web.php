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

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/produk', function () {
    return view('admin/produk');
});

Route::get('landing', function (){
    return view('landing/landing');
});

Route::get('login', function (){
    return view('login');
});

Route::get('register', function (){
    return view('register');
});
