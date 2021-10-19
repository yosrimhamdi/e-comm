<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');

Route::middleware(['auth:sanctum', 'verified'])
  ->get('/dashboard', function () {
    return view('home.dashboard');
  })
  ->name('dashboard');
