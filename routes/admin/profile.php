<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
  Route::get('/profile', [ProfileController::class, 'index']);
  Route::post('/profile', [ProfileController::class, 'update']);
  Route::get('/profile/edit', [ProfileController::class, 'editForm']);
});
