<?php

use App\Http\Controllers\CodeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CodeController::class, 'index'])->name("home");
Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/user/register', [UserController::class, 'register_user'])->middleware('guest');
Route::post('/user/login', [UserController::class, 'login_user'])->middleware('guest');
Route::post('/user/logout', [UserController::class, 'logout_user'])->middleware('auth');

Route::get('/new', [CodeController::class, 'new'])->middleware('auth');
Route::get('/edit/{id}', [CodeController::class, 'edit'])->middleware('auth');

Route::put('/edit/{id}', [CodeController::class, 'edit_post'])->middleware('auth');
Route::post('/new', [CodeController::class, 'new_post'])->middleware('auth');

Route::get('/manage', [CodeController::class, 'manage'])->middleware('auth');

Route::delete('/{id}', [CodeController::class, 'remove'])->middleware('auth');
Route::get('/{id}', [CodeController::class, 'show']);

