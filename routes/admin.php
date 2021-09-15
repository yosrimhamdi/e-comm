<?php

use App\Http\Controllers\AdminController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  Route::get('/login', [AdminController::class, 'loginForm']);
  Route::get('/dashboard', [
    AdminController::class,
    'dashBoardPage',
  ])->middleware('auth:admin');

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
