<?php

function admin() {
  return Auth::guard('admin')->user();
}
