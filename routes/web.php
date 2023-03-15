<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


Route::get('/', [Controller::class, 'loginV'])->name('user.login');
Route::get('/logout', [Controller::class, 'logoutV'])->name('user.logout');
Route::get('/signup', [Controller::class, 'signupV'])->name('user.signup');
Route::post('/home', [Controller::class, 'homepage'])->name('user.home');

Route::post('/', [Controller::class, 'user_insert'])->name('user.store');

Route::get('/delete', [Controller::class, 'deleteV'])->name('nav.delete')->middleware('test');
Route::post('/delete', [Controller::class, 'user_delete'])->name('user.delete');

//task2