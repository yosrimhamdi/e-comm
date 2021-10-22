<?php

namespace App\Http\Traits;
use Image;
use File;

trait UploadImage {
  private function getImagePath($image, $path) {
    $name = hexdec(uniqid());
    $extension = '.' . strtolower($image->getClientOriginalExtension());
    return $path . $name . $extension;
  }

  private function makeDir($path) {
    if (!File::exists($path)) {
      File::makeDirectory($path, 0777, true);
    }
  }

  private function uploadImage($image, $path) {
    $this->makeDir($path);
    $imagePath = $this->getImagePath($image, $path);

    Image::make($image)
      ->crop(300, 300, null)
      ->save($imagePath);

    return $imagePath;
  }
}
