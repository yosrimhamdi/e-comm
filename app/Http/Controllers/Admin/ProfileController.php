<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Models\Admin;

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

    if ($photo) {
      $photoPath = $this->savePhoto($photo);
    }

    $admin = admin();

    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->profile_photo_path = $photoPath ?? $admin->profile_photo_path;
    $admin->save();

    return redirect()->route('admin.profile');
  }

  private function savePhoto($photo) {
    $name = hexdec(uniqid());
    $extension = '.' . strtolower($photo->getClientOriginalExtension());
    $photoPath = 'admin/photos/' . $name . $extension;

    Image::make($photo)
      ->resize(500, null, function ($constraint) {
        $constraint->aspectRatio();
      })
      ->save($photoPath);

    return $photoPath;
  }
}
