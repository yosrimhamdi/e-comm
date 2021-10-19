<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBrandsTableColumnNames extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('brands', function (Blueprint $table) {
      $table->renameColumn('name_ar', 'name_fr');
      $table->renameColumn('image', 'imageURL');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('brands', function (Blueprint $table) {
      //
    });
  }
}
