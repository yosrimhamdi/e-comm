<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
  public function loginForm() {
    return view('admin.login');
  }

  public function store() {
    echo 'will login';
  }

  public function dashboardPage() {
    return view('admin.dashboard');
  }
}
