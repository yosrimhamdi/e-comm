<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{AuthController, ProfileController};

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  $limiter = config('fortify.limiters.login');

  Route::post('/login', [AuthController::class, 'store'])
    ->middleware(
      array_filter([
        'guest:' . config('fortify.guard'),
        $limiter ? 'throttle:' . $limiter : null,
      ])
    )
    ->name('login');

  // should be logged in: auth:admin
  Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [AuthController::class, 'dashBoardPage']);

    Route::get('/profile', [ProfileController::class, 'index'])->name(
      'profile'
    );
    Route::get('/profile/edit', [ProfileController::class, 'editForm'])->name(
      'profile.edit'
    );
    Route::post('/profile', [ProfileController::class, 'update'])->name(
      'profile.update'
    );

    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
  });

  // should not be logged in: guest:admin
  Route::group(['middleware' => 'guest:admin'], function () {
    Route::get('/login', [AuthController::class, 'loginForm']);
  });
});
