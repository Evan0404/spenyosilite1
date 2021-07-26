<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\LiterasiController;
use App\Http\Controllers\SetorController;

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
// Route::get('/dashboard',[DashboardController::class,'index']);
// Route::get('/',[AwalController::class,'index']);
Route::get('/literasi', [LiterasiController::class,'index'])->name('literasi');
Route::get('/literasi/cerita/{judul}', [LiterasiController::class,'modal']);
Route::get('/setor', [SetorController::class,'add']);
Route::post('/setor/insert', [LiterasiController::class,'insert']);

Route::get('/', [AwalController::class,'index']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/delete/{judul}', [DashboardController::class,'delete']);
