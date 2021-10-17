<?php

use App\Http\Controllers\Home\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginForm']);
Route::get('/register', [AuthController::class, 'registerForm'])->name(
  'register'
);
Route::get('/forgot-password', [AuthController::class, 'forgotPasswordForm']);

Route::get('/reset-password', [AuthController::class, 'resetPasswordForm']);
