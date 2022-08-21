<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;

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

// login
Route::get('login', [AuthController::class, 'showLogin']);
Route::get('logout', [AuthController::class, 'logout']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('register', [AuthController::class, 'showRegister']);

// admin
Route::get('/admin', [AdminController::class, 'showAdmin']);
Route::get('dashboard', [AdminController::class, 'showDashboard']);
Route::get('kategori', [AdminController::class, 'showKategori']);
Route::get('pelanggan', [AdminController::class, 'showPelanggan']);
Route::get('supplier', [AdminController::class, 'showSupplier']);


// produk
Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);


// user
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);


// home
Route::get('landing', [HomeController::class, 'showLanding']);
Route::get('product', [HomeController::class, 'showProduct']);
Route::get('category', [HomeController::class, 'showCategory']);
Route::get('detail', [HomeController::class, 'showDetail']);



