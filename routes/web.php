<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;

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
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('login', function(){
    return view('login');
});

<<<<<<< HEAD
Route::get('home', function(){
    return view('home');
});


=======
// Pasien
>>>>>>> 6a7dccfe8a7e70772a24b5774756b4f7983983e6
Route::get('datapasien', [PasienController::class, 'datapasien']);
Route::get('datapasien/tambahpasien', [PasienController::class, 'tambahpasien']);
Route::post('datapasien', [PasienController::class, 'simpanpasien']);
Route::get('datapasien/editpasien/{id}', [PasienController::class, 'editpasien']);
Route::patch('datapasien/{id}', [PasienController::class, 'editpasienprocess']);
Route::delete('datapasien/{id}', [PasienController::class, 'hapusdata']);

// Dokter
Route::get('datadokter', [DokterController::class, 'datadokter']);
Route::get('datadokter/tambahdokter', [DokterController::class, 'tambahdokter']);
Route::post('datadokter', [DokterController::class, 'simpandokter']);
Route::get('datadokter/editdokter/{id}', [DokterController::class, 'editdokter']);
Route::patch('datadokter/{id}', [DokterController::class, 'editdokterprocess']);
Route::delete('datadokter/{id}', [DokterController::class, 'hapusdata']);