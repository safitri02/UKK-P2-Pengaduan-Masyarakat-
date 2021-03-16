<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembayaranController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/detail/{id}', [SiswaController::class, 'show']);
Route::get('/admin/tambah_siswa', [SiswaController::class, 'create']);
Route::post('/admin/tambah_siswa', [SiswaController::class, 'store']);
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');


