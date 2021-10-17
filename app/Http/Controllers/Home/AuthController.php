<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller {
  public function loginForm() {
    return view('home.login');
  }

  public function registerForm() {
    return view('home.register');
  }
}
