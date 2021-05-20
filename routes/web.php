<?php

use Illuminate\Support\Facades\Route;


// * Главная *
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

// * Пользователи *
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Auth::routes();
