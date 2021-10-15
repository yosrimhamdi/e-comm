<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  // should be logged in: auth:admin
  Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [AuthController::class, 'dashBoardPage']);

    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

    Route::get('/password/change', [
      AuthController::class,
      'changePasswordForm',
    ]);
    Route::post('/password/change', [AuthController::class, 'changePassword']);
  });

  // should not be logged in: guest:admin
  Route::group(['middleware' => 'guest:admin'], function () {
    Route::get('/login', [AuthController::class, 'loginForm']);

    $limiter = config('fortify.limiters.login');

    Route::post('/login', [AuthController::class, 'store'])
      ->middleware(
        array_filter([
          'guest:' . config('fortify.guard'),
          $limiter ? 'throttle:' . $limiter : null,
        ])
      )
      ->name('login');
  });
});
