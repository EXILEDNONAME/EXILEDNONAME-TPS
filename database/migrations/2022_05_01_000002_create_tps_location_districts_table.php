<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPSLocationDistrictsTable extends Migration {
  public function up() {
    Schema::create('tps_location_districts', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_area')->unsigned();
      $table->timestamp('date_start')->nullable();
      $table->timestamp('date_end')->nullable();
      $table->string('name');
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
      $table->softDeletes();
      $table->foreign('id_area')->references('id')->on('tps_location_areas')->onDelete('restrict')->onUpdate('restrict');
    });
  }

  public function down() {
    Schema::dropIfExists('tps_location_districts');
  }
}
