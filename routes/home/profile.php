<?php

use App\Http\Controllers\Home\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:web'], function () {
  Route::get('/profile/update', [
    ProfileController::class,
    'getProfileUpdateForm',
  ])->name('profile.update.form');

  Route::post('/profile/update', [
    ProfileController::class,
    'updateProfile',
  ])->name('profile.update');
});
