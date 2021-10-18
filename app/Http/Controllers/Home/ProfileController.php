<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller {
  public function getProfileUpdateForm() {
    return view('home.profile-update');
  }

  public function updateProfile(Request $request) {
    $request->validate([
      'email' => 'required',
      'name' => 'required',
      'phone' => ['required', 'string', 'min:8', 'max:11'],
    ]);

    $user = user();
    $user->email = $request->email;
    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->save();

    return redirect()
      ->back()
      ->with(toastr('success', 'Profile Updated'));
  }
}
