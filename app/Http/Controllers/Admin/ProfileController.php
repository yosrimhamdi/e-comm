<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    admin()->update([
      'name' => $request->name,
      'email' => $request->email,
    ]);

    return redirect()->route('admin.profile');
  }
}
