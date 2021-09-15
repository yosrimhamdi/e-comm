<?php

use App\Http\Controllers\AdminController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  Route::get('/login', [AdminController::class, 'loginForm']);

  $limiter = config('fortify.limiters.login');

  Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(
      array_filter([
        'guest:' . config('fortify.guard'),
        $limiter ? 'throttle:' . $limiter : null,
      ])
    )
    ->name('login');
});

Route::group(
  ['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth:admin'],
  function () {
    Route::get('/dashboard', [AdminController::class, 'dashBoardPage']);

    Route::post('/logout', [
      AuthenticatedSessionController::class,
      'destroy',
    ])->name('logout');
  }
);
