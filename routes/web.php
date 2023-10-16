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
Route::get('/product', [HomeController::class,'product']);

Route::get('/cart', [HomeController::class,'cart']);
Route::get('/store_cart/{id_gambar}/{id}/{gambar}/{nama_produk}/{varian}/{qty}/{harga}/{subtotal}/{note}', [HomeController::class,'store_cart']);
Route::post('/deleteCart', [HomeController::class,'deleteCart']);


Route::get('/checkOut', [HomeController::class,'checkOut']);

Route::get('/login', [AuthController::class,'login']);
Route::post('/auth_system', [AuthController::class,'auth_system']);


Route::get('/register', [AuthController::class,'register']);
Route::get('/register_password', [AuthController::class,'register_password']);
Route::get('/register_user', [AuthController::class,'register_user']);

Route::post('/save_register',[AuthController::class,'save_register']);
Route::post('/save_register2',[AuthController::class,'save_register2']);
Route::post('/save_register3',[AuthController::class,'save_register3']);

Route::get('/store_register',[AuthController::class,'store_register']);


Route::get('/getSession',[AuthController::class,'getSession']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/profile/{id}/{idProv}/{idKota}/{idKec}', [AuthController::class,'profile']);
Route::post('/edit_profile', [AuthController::class,'edit_profile']);

Route::get('/register_mitra/{id}', [AuthController::class,'register_mitra']);
Route::post('/store_register_mitra', [AuthController::class,'store_register_mitra']);
Route::get('/updateUser/{id}/{no_telp}/{email}', [AuthController::class,'updateUser']);

Route::get('/forgetPassword', [AuthController::class,'forgetPassword']);
Route::post('/ubah_Password', [AuthController::class,'ubah_password']);

Route::get('/trenDaging', [MitraController::class,'trenDaging']);
Route::get('/daftarProduk', [MitraController::class,'daftarProduk']);
Route::get('/tambahProduk', [MitraController::class,'tambahProduk']);
Route::get('/tambahProduk/{id}', [MitraController::class,'updateProduk']);

Route::post('/store_produk', [MitraController::class,'store_produk']);
Route::post('/edit_produk', [MitraController::class,'edit_produk']);

Route::post('/hapusProduk', [MitraController::class,'deleteProduk']);

Route::get('/produk/{name}', [HomeController::class,'produk']);
