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
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::get('logout', [AuthController::class, 'logout']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('register', [AuthController::class, 'showRegister']);

// admin
Route::get('dashboard', [AdminController::class, 'showDashboard']);
Route::get('kategori', [AdminController::class, 'showKategori']);
Route::get('pelanggan', [AdminController::class, 'showPelanggan']);
Route::get('supplier', [AdminController::class, 'showSupplier']);


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});


// home
Route::get('landing', [HomeController::class, 'showLanding']);
Route::get('product', [HomeController::class, 'showProduct']);
Route::get('category', [HomeController::class, 'showCategory']);
Route::get('detail', [HomeController::class, 'showDetail']);







