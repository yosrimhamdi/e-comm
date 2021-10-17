<?php
use Illuminate\Support\Facades\Route;

Route::view('/login', 'home.auth.login')->name('login');
Route::view('/register', 'home.auth.register')->name('register');
Route::view('/forgot-password', ['home.auth.forgot-password'])->name(
  'password.request'
);
