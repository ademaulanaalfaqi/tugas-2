<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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
Route::get('login', [AuthController::class, 'showLogin']);
Route::get('register', [AuthController::class, 'showRegister']);


Route::get('/admin', [AdminController::class, 'showAdmin']);
Route::get('dashboard', [AdminController::class, 'showDashboard']);
Route::get('kategori', [AdminController::class, 'showKategori']);
Route::get('promo', [AdminController::class, 'showPromo']);
Route::get('pelanggan', [AdminController::class, 'showPelanggan']);
Route::get('supplier', [AdminController::class, 'showSupplier']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);


Route::get('landing', [HomeController::class, 'showLanding']);
Route::get('product', [HomeController::class, 'showProduct']);
Route::get('category', [HomeController::class, 'showCategory']);
Route::get('detail', [HomeController::class, 'showDetail']);



