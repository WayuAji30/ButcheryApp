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

Route::get('/index', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/searchProduct', [HomeController::class, 'searchProduct']);
Route::get('/checkout_payment', [HomeController::class, 'checkout_payment']);
Route::get('/notification', [HomeController::class, 'notification']);


Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/store_cart/{id}/{id_produk}/{id_supplier}/{nama_produk}/{varian}/{harga}/{qty}/{subtotal}/{note}/{foto_produk}', [HomeController::class, 'store_cart']);

Route::post('/deleteCart', [HomeController::class, 'deleteCart']);

Route::get('/checkOut/{id}', [HomeController::class, 'checkOut']);
Route::get('/store_checkout/{id_user}/{id_supplier}/{id_produk}/{data_keranjang}/{harga_total}/{foto}', [HomeController::class, 'store_checkout']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/auth_system', [AuthController::class, 'auth_system']);

Route::get('/register', [AuthController::class, 'register']);
Route::get('/register_password', [AuthController::class, 'register_password']);
Route::get('/register_user', [AuthController::class, 'register_user']);

Route::post('/save_register', [AuthController::class, 'save_register']);
Route::post('/save_register2', [AuthController::class, 'save_register2']);
Route::post('/save_register3', [AuthController::class, 'save_register3']);

Route::get('/store_register', [AuthController::class, 'store_register']);


Route::get('/getSession', [AuthController::class, 'getSession']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/profile/{id}/{idProv}/{idKota}/{idKec}', [AuthController::class, 'profile']);
Route::post('/edit_profile', [AuthController::class, 'edit_profile']);

Route::get('/register_mitra/{id}', [AuthController::class, 'register_mitra']);
Route::post('/store_register_mitra', [AuthController::class, 'store_register_mitra']);
Route::get('/updateUser/{id}/{no_telp}/{email}', [AuthController::class, 'updateUser']);

Route::get('/forgetPassword', [AuthController::class, 'forgetPassword']);
Route::post('/ubah_Password', [AuthController::class, 'ubah_password']);

Route::get('/trenDaging', [MitraController::class, 'trenDaging']);
Route::get('/daftarProduk/{id_supplier}', [MitraController::class, 'daftarProduk']);
Route::get('/pesanan', [MitraController::class, 'pesanan']);
Route::get('/langganan', [MitraController::class, 'langganan']);
Route::get('/tambahProduk', [MitraController::class, 'tambahProduk']);
Route::get('/tambahProduk/{id}', [MitraController::class, 'updateProduk']);

Route::post('/store_produk', [MitraController::class, 'store_produk']);
Route::post('/edit_produk', [MitraController::class, 'edit_produk']);

Route::post('/hapusProduk', [MitraController::class, 'deleteProduk']);

Route::get('/produk/{id}', [HomeController::class, 'produk']);

Route::get('/success_page', [HomeController::class, 'success_page']);
Route::post('/test_api', [HomeController::class, 'test_api']);
