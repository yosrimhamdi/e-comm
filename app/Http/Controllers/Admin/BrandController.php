<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImage;
use Illuminate\Database\QueryException;
use File;

class BrandController extends Controller {
  use UploadImage;
  public const BRANDS_IMAGE_PATH = 'images/brands/';

  public function index() {
    $brands = Brand::all();

    return view('admin.brands.index', compact('brands'));
  }

  public function create() {
    return view('admin.brands.create');
  }

  public function store(Request $request) {
    $request->validate([
      'name_en' => 'required',
      'name_fr' => 'required',
      'image' => 'required',
    ]);

    try {
      $brandImage = $request->file('image');
      $imagePath = $this->uploadImage($brandImage, BRANDS_IMAGE_PATH);

      $brand = new Brand();
      $brand->name_en = trim($request->name_en);
      $brand->name_fr = trim($request->name_fr);
      $brand->imageURL = $imagePath;
      $brand->slug = strtolower(str_replace(' ', '-', trim($request->name_en)));
      $brand->save();

      return $this->backWith('success', 'Created a new brand.');
    } catch (QueryException) {
      File::delete($imagePath);

      return redirect()
        ->back()
        ->withErrors(['name_en' => 'duplicate brand name']);
    } catch (\Exception) {
      File::delete($imagePath);

      return $this->backWidth('error', 'Something went wrong. try again.');
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function show(Brand $brand) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function edit(Brand $brand) {
    return view('admin.brands.edit', compact('brand'));
  }

  public function update(Request $request, Brand $brand) {
    $request->validate([
      'name_en' => 'required',
      'name_fr' => 'required',
    ]);

    $brand->name_en = $request->name_en;
    $brand->name_fr = $request->name_fr;

    $brandNewImage = $request->file('image');

    if ($brandNewImage) {
      File::delete($brand->imageURL);
      $brand->imageURL = $this->uploadImage($brandNewImage, BRANDS_IMAGE_PATH);
    }

    $brand->save();

    return redirect()
      ->route('brands.index')
      ->with(toastr('success', 'brand updated'));
  }

  public function destroy(Brand $brand) {
    $brand->delete();

    return $this->backWith('success', 'Brand Deleted.');
  }

  private function backWith($status, $message) {
    return redirect()
      ->back()
      ->with(toastr($status, $message));
  }
}
