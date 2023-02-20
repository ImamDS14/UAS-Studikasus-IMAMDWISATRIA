<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PesanController;

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

Route::get('/', function () {
    return redirect('/login');
});

// dashboard
route::get('/dashboard', [DashboardController::class, 'index']);

// hotel
route::get('/hotel', [HotelController::class, 'index']);
route::post('/hotel', [HotelController::class, 'tambah']);
route::get('/hotel/{hotel}', [HotelController::class, 'hapus']);
route::put('/hotel/{hotel}', [HotelController::class, 'ubah']);

// news
route::get('/news', [NewsController::class, 'index']);
route::post('/news', [NewsController::class, 'tambah']);
route::get('/news/{news}', [NewsController::class, 'hapus']);

// pesan
route::get('/pesan', [PesanController::class, 'index']);
route::post('/pesan/{id}', [PesanController::class, 'tambah']);
route::get('/pemesanan', [PesanController::class, 'pemesanan']);
route::get('/pesan/hapus/{pesan}', [PesanController::class, 'hapus']);

route::get('/logout', function (Request $request) {
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});
