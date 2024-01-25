<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\MasukanController;

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

Route::get('/',[DashboardController::class,'index'])->name('dashboardpage');

Route::get('/content',[ContentController::class,'index'])->name('contentpage');

Route::get('/pemasukan',[PemasukanController::class,'index'])->name('pemasukanpage');

Route::get('/masukan',[MasukanController::class,'index'])->name('masukan');
