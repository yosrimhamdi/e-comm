<?php

namespace App\Http\Controllers\Home;
use File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\UploadImage;

class ProfileController extends Controller {
  use UploadImage;

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
    $photo = $request->file('photo');

    if ($photo) {
      if ($user->profile_photo_path != 'storage/profile-photos/default.png') {
        File::delete($user->profile_photo_path);
      }

      $user->profile_photo_path = $this->uploadImage($photo, 'users/photos/');
    }

    $user->email = $request->email;
    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->save();

    return redirect()
      ->back()
      ->with(toastr('success', 'Profile Updated'));
  }
}
