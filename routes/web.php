<?php

use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\JenisBarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Login Controller
//Route::get('/', [AuthController::class,'index']);
//Route::post('/ceklogin', [AuthController::class,'cek_login']);
//Route::get('/logout', [AuthController::class,'logout']);
Route::group(['middleware' => ['auth', 'checkRole:admin,kasir']], function () {
  Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('register', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('logout', [AuthController::class, 'signOut'])->name('signout');
//Temporary Role Controller

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {


  //User
  Route::get('/user', [UserController::class, 'index']);
  Route::post('/user/store', [UserController::class, 'store']);
  Route::post('/user/update/{id}', [UserController::class, 'update']);
  Route::get('/user/destroy/{id}', [UserController::class, 'destroy']);

  //Jenis Barang
  Route::get('/jenisbarang', [JenisBarangController::class, 'index']);
  Route::post('/jenisbarang/store', [JenisBarangController::class, 'store']);
  Route::post('/jenisbarang/update/{id}', [JenisBarangController::class, 'update']);
  Route::get('/jenisbarang/destroy/{id}', [JenisBarangController::class, 'destroy']);

  //Data Barang
  Route::get('/barang', [BarangController::class, 'index']);
  Route::post('/barang/store', [BarangController::class, 'store']);
  Route::post('/barang/update/{id}', [BarangController::class, 'update']);
  Route::get('/barang/destroy/{id}', [BarangController::class, 'destroy']);

  //Set diskon
  Route::get('/setdiskon', [DiskonController::class, 'index']);
  Route::post('/setdiskon/update/{id}', [DiskonController::class, 'update']);
});

Route::group(['middleware' => ['auth', 'checkRole:admin,kasir']], function () {

  Route::get('/', [HomeController::class, 'index']);

  //Set Profile
  Route::get('/profile', [UserController::class, 'profile']);
  Route::post('/profile/updateprofile/{id}', [UserController::class, 'updateprofile']);


  //Data Transaksi
  Route::get('/transaksi', [TransaksiController::class, 'index']);
  Route::get('/transaksicreate', [TransaksiController::class, 'create']);
});
