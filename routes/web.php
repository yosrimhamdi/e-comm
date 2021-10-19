<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');

Route::middleware(['auth:sanctum', 'verified'])
  ->get('/dashboard', function () {
    return view('home.dashboard');
  })
  ->name('dashboard');

require_once __DIR__ . '/home/auth.php';
require_once __DIR__ . '/home/profile.php';
require_once __DIR__ . '/admin/auth.php';
require_once __DIR__ . '/admin/profile.php';
