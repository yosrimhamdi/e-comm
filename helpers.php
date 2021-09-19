<?php

use Illuminate\Support\Facades\Auth;

function admin() {
  return Auth::guard('admin')->user();
}

function toastr($status, $message) {
  return [
    'toastr' => true,
    'status' => $status,
    'message' => $message,
  ];
}
