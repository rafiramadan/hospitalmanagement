<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\TriaseController;
use App\Http\Controllers\ObatController;

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

// Pasien
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

// Perawat
Route::get('dataperawat', [PerawatController::class, 'dataperawat']);
Route::get('dataperawat/tambahperawat', [PerawatController::class, 'tambahperawat']);
Route::post('dataperawat', [PerawatController::class, 'simpanperawat']);
Route::get('dataperawat/editperawat/{id}', [PerawatController::class, 'editperawat']);
Route::patch('dataperawat/{id}', [PerawatController::class, 'editperawatprocess']);
Route::delete('dataperawat/{id}', [PerawatController::class, 'hapusdata']);

// Obat
Route::get('dataobat', [ObatController::class, 'dataobat']);
Route::get('dataobat/tambahobat', [ObatController::class, 'tambahobat']);
Route::post('dataobat', [ObatController::class, 'simpanobat']);
Route::get('dataobat/editobat/{id}', [ObatController::class, 'editobat']);
Route::patch('dataobat/{id}', [ObatController::class, 'editobatprocess']);
Route::delete('dataobat/{id}', [ObatController::class, 'hapusdata']);

// Triase
Route::resource('datatriase', TriaseController::class);
