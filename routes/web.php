<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/home', [HomeController::class , 'index'])->middleware(['auth'])->name('home');
Route::get('pesan/{id}', [PesanController::class , 'index'])->middleware(['auth']);
Route::post('pesan/{id}', [PesanController::class , 'store'])->middleware(['auth']);
Route::get('check-out', [PesanController::class , 'check_out'])->middleware(['auth']);
Route::delete('check-out/{id}', [PesanController::class , 'delete'])->middleware(['auth']);
Route::get('konfirmasi-check-out', [PesanController::class , 'konfirmasi'])->middleware(['auth']);
Route::get('profile', [ProfileController::class , 'index'])->middleware(['auth']);
Route::post('profile', [ProfileController::class , 'store'])->middleware(['auth']);
Route::get('history', [HistoryController::class , 'index'])->middleware(['auth']);
Route::get('history/{id}', [HistoryController::class , 'show'])->middleware(['auth']);

