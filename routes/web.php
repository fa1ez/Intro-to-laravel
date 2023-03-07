<?php

use Illuminate\Routing\Controllers\Middleware;
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

//Signup
Route::get('/', [AdminController::class, 'FirstFunc'])->name('home');
// Route::get('/about', [AdminController::class,'FirstFunc'])->name('home1');
Route::post('/adminstore', [AdminController::class, 'sstore'])->name('myadmin.store');

//login
Route::get('/login', [AdminController::class, 'Loginscreen'])->name('myadmin.login');
Route::post('/home', [AdminController::class, 'admincheck'])->name('myadmin.check');

//change password
Route::get('/chngpassword', [AdminController::class, 'resetpassscreen'])->name('myadmin.reset');
Route::post('/changepassword', [AdminController::class, 'resetpass'])->name('myadmin.resetpass');

//delete account
Route::get('/delacc', [AdminController::class, 'delscreen'])->name('myadmin.del')->middleware('test');

Route::get('/deleteAdmin', [AdminController::class, 'del_acc'])->name('myadmin.delete');