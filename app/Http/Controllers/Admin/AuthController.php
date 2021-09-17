<?php

namespace App\Http\Controllers\Admin;

use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class AuthController extends AuthenticatedSessionController {
  public function loginForm() {
    return view('auth.admin-login');
  }

  public function dashboardPage() {
    return view('admin.dashboard');
  }
}
