<?php

namespace App\Http\Controllers;

use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class AdminController extends AuthenticatedSessionController {
  public function loginForm() {
    return view('auth.admin-login');
  }

  public function dashboardPage() {
    return view('admin.dashboard');
  }
}
