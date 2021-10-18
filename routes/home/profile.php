<?php

use App\Http\Controllers\Home\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'user.profile.'], function () {
  Route::get('/profile/update', [
    ProfileController::class,
    'getProfileUpdateForm',
  ])->name('update.form');

  Route::post('/profile/update', [
    ProfileController::class,
    'updateProfile',
  ])->name('update');
});
