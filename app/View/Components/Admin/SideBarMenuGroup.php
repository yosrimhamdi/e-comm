<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class SideBarMenuGroup extends Component {
  public $endPoint;

  public function __construct($endPoint) {
    $this->endPoint = $endPoint;
  }

  public function active() {
    return str_contains(request()->url(), $this->endPoint) ? 'active' : '';
  }

  public function render() {
    return view('components.admin.side-bar-menu-group');
  }
}
