<?php

use App\Http\Controllers\AdminController;

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', [AdminController::class, 'index']);
  Route::post('/login', [AdminController::class, 'store']);
});
