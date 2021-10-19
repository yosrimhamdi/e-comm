<?php

use Illuminate\Support\Facades\Route;

require_once __DIR__ . '/home/auth.php';
require_once __DIR__ . '/home/profile.php';

require_once __DIR__ . '/admin/auth.php';
require_once __DIR__ . '/admin/profile.php';
require_once __DIR__ . '/admin/brands.php';

Route::view('/', 'home.index')->name('home');

Route::middleware(['auth:sanctum', 'verified'])
  ->get('/dashboard', function () {
    return view('home.dashboard');
  })
  ->name('dashboard');
