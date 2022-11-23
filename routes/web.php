<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('home', function(){
     return view('home');
});


Route::get('datapasien', [PagesController::class, 'datapasien']);
Route::get('datapasien/tambahpasien', [PagesController::class, 'tambahpasien']);
Route::post('datapasien', [PagesController::class, 'simpanpasien']);
Route::get('datapasien/editpasien/{id}', [PagesController::class, 'editpasien']);
Route::patch('datapasien/{id}', [PagesController::class, 'editpasienprocess']);
Route::post('datapasien/{id}', [PageController::class, 'hapus']);