<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use File;

class ProfileController extends Controller {
  public function index() {
    return view('admin.profile.index');
  }

  public function editForm() {
    return view('admin.profile.edit');
  }

  public function update(Request $request) {
    $request->validate([
      'name' => 'required',
      'email' => 'email',
    ]);

    $photo = $request->file('photo');
    $admin = admin();

    if ($photo) {
      $photoPath = $this->savePhoto($photo);

      if ($admin->profile_photo_path != 'admin/photos/default.png') {
        File::delete($admin->profile_photo_path);
      }
    }

    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->profile_photo_path = $photoPath ?? $admin->profile_photo_path;
    $admin->save();

    return redirect()->to('/admin/profile');
  }

  private function savePhoto($photo) {
    $name = hexdec(uniqid());
    $extension = '.' . strtolower($photo->getClientOriginalExtension());
    $photoPath = 'admin/photos/' . $name . $extension;

    Image::make($photo)
      ->crop(300, 300, null)
      ->save($photoPath);

    return $photoPath;
  }
}
