<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
  public function index() {
    return view('admin.login');
  }

  public function store() {
    echo 'will login';
  }
}
