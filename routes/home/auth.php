<?php

use App\Http\Controllers\Home\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');

Route::get('/register', [AuthController::class, 'registerForm'])->name(
  'register'
);

Route::get('/forgot-password', [
  AuthController::class,
  'forgotPasswordForm',
])->name('password.request');

Route::get('/reset-password/{token}', [
  AuthController::class,
  'resetPasswordForm',
])->name('password.reset');

Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
