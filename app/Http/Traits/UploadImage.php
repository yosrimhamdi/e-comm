<?php

namespace App\Http\Traits;
use Image;
use File;

trait UploadImage {
  private function uploadImage($image, $path) {
    if (!File::exists($path)) {
      File::makeDirectory($path, 0777, true);
    }

    $name = hexdec(uniqid());
    $extension = '.' . strtolower($image->getClientOriginalExtension());
    $photoPath = $path . $name . $extension;

    Image::make($image)
      ->crop(300, 300, null)
      ->save($photoPath);

    return $photoPath;
  }
}
