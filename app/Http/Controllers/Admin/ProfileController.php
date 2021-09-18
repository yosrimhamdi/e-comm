<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProfileController extends Controller {
  public function profilePage() {
    $admin = admin();

    return view('admin.profile', compact('admin'));
  }
}
