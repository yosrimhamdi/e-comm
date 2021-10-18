<?php

namespace App\Http\Traits;
use Image;
use File;

trait UploadImage {
  private function uploadImage($photo, $path) {
    if (!File::exists($path)) {
      File::makeDirectory($path, 0777, true);
    }

    $name = hexdec(uniqid());
    $extension = '.' . strtolower($photo->getClientOriginalExtension());
    $photoPath = $path . $name . $extension;

    Image::make($photo)
      ->crop(300, 300, null)
      ->save($photoPath);

    return $photoPath;
  }
}
