<?php

use App\Http\Controllers\AdminController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  $limiter = config('fortify.limiters.login');

  Route::post('/login', [AdminController::class, 'store'])
    ->middleware(
      array_filter([
        'guest:' . config('fortify.guard'),
        $limiter ? 'throttle:' . $limiter : null,
      ])
    )
    ->name('login');

  // should be logged in: auth:admin
  Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashBoardPage']);

    Route::post('/logout', [AdminController::class, 'destroy'])->name('logout');
  });

  // should not be logged in: guest:admin
  Route::group(['middleware' => 'guest:admin'], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
  });
});
