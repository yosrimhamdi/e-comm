<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultPhotoToAdmin extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('admins', function (Blueprint $table) {
      $table
        ->string('profile_photo_path', 2048)
        ->default('profile-photos/default.png')
        ->change();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('admin', function (Blueprint $table) {
      //
    });
  }
}
