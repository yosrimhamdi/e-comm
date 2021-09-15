<?php

use App\Http\Controllers\AdminController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  Route::get('/login', [AdminController::class, 'index']);

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
