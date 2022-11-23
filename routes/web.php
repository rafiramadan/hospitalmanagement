<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

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
Route::get('login', function(){
    return view('login');
});

Route::get('home', function(){
     return view('home');
});


Route::get('datapasien', [PasienController::class, 'datapasien']);
Route::get('datapasien/tambahpasien', [PasienController::class, 'tambahpasien']);
Route::post('datapasien', [PasienController::class, 'simpanpasien']);
Route::get('datapasien/editpasien/{id}', [PasienController::class, 'editpasien']);
Route::patch('datapasien/{id}', [PasienController::class, 'editpasienprocess']);
Route::delete('datapasien/{id}', [PasienController::class, 'hapusdata']);