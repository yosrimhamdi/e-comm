<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {
  public function profilePage() {
    $admin = admin();

    return view('admin.profile', compact('admin'));
  }
}
