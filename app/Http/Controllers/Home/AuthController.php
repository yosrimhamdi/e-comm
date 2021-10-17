<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller {
  public function loginForm() {
    return view('home.auth.login');
  }

  public function registerForm() {
    return view('home.auth.register');
  }

  public function forgotPasswordForm() {
    return view('home.auth.forgot-password');
  }

  public function resetPasswordForm(Request $request) {
    return view('home.auth.reset-password', compact('request'));
  }
}
