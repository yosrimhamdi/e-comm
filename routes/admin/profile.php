<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;

Route::group(['middleware' => 'auth:admin'], function () {
  Route::get('/profile', [ProfileController::class, 'index']);
  Route::get('/profile/edit', [ProfileController::class, 'editForm']);
  Route::post('/profile', [ProfileController::class, 'update']);
});
