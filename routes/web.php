<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AdminController::class,'FirstFunc'])->name('home');
Route::get('/about', [AdminController::class,'FirstFunc'])->name('home1');
Route::post('/adminstore', [AdminController::class,'Store'])->name('admin.store');


