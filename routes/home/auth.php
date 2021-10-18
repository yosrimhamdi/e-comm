<?php

use App\Http\Controllers\Home\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest:web'], function () {
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
});

Route::group(['middleware' => 'auth:web'], function () {
  Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('/password/change', [
    AuthController::class,
    'changePasswordForm',
  ])->name('password.change.form');
  Route::post('/password/change', [
    AuthController::class,
    'changePassword',
  ])->name('password.change');
});
