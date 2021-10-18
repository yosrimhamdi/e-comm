<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;

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

  public function logout() {
    Auth::guard('web')->logout();

    return redirect()->route('login');
  }

  public function changePasswordForm() {
    return view('home.auth.password-change');
  }

  public function changePassword(Request $request) {
    $request->validate([
      'old_password' => 'required',
      'new_password' => 'required|min:5',
      'password_confirmation' => 'same:new_password',
    ]);

    $user = user();

    if (!Hash::check($request->old_password, $user->password)) {
      return redirect()
        ->back()
        ->withErrors(['old_password' => 'wrong password']);
    }

    $user->password = Hash::make($request->new_password);
    $user->save();

    return $this->logout();
  }
}
