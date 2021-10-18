<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImagePreview extends Component {
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public $fileInputId;
  public $previewLocationId;
  public function __construct($fileInputId, $previewLocationId) {
    $this->fileInputId = $fileInputId;
    $this->previewLocationId = $previewLocationId;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.image-preivew');
  }
}
