<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Hash;

class AuthController extends AuthenticatedSessionController {
  public function loginForm() {
    return view('auth.admin-login');
  }

  public function dashboardPage() {
    return view('admin.dashboard');
  }

  public function changePasswordForm() {
    return view('admin.password-change');
  }

  public function changePassword(Request $request) {
    $request->validate(
      [
        'password' => 'required',
        'password-new' => 'required|min:6',
        'password-confirm' => 'required|same:password-new',
      ],
      ['password-confirm.same' => 'passwords don\'t match']
    );

    $admin = admin();

    if (Hash::check($request->password, $admin->password)) {
      $admin->password = Hash::make($request->password);
      $admin->save();

      return redirect()
        ->back()
        ->with(toastr('success', 'Password changed successfully'));
    }

    return redirect()
      ->back()
      ->with(toastr('error', 'Wrong password'));
  }
}
