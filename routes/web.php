<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasyarakatController;


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
Route::get('/keluar', [UserController::class, 'keluar']);
Route::get('/masuk', [UserController::class, 'index']);
Route::get('/registrasi', [UserController::class, 'registrasi']);
Route::post('/proses_registrasi', [UserController::class, 'proses_registrasi']);
Route::post('/proses_masuk', [UserController::class, 'proses_masuk']);


// Route Masyarakat
Route::get('/masyarakat', [MasyarakatController::class, 'index']);

