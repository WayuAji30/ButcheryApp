<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MitraController;

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

Route::get('/index', [HomeController::class,'index']);
Route::get('/', [HomeController::class,'index']);
Route::get('/searchProduct', [HomeController::class,'searchProduct']);
Route::get('/login', [AuthController::class,'login']);
Route::get('/register', [AuthController::class,'register']);
Route::get('/profile', [AuthController::class,'profile']);
Route::get('/register_password', [AuthController::class,'register_password']);
Route::get('/register_user', [AuthController::class,'register_user']);
Route::get('/register_mitra', [AuthController::class,'register_mitra']);
Route::get('/changePassword', [AuthController::class,'changePassword']);
Route::get('/trenDaging', [MitraController::class,'trenDaging']);
Route::get('/daftarProduk', [MitraController::class,'daftarProduk']);
Route::get('/tambahProduk', [MitraController::class,'tambahProduk']);