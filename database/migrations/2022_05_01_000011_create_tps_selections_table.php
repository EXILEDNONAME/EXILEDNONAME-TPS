<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPSSelectionsTable extends Migration {
  public function up() {
    Schema::create('tps_selections', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_area')->unsigned()->default(0);
      $table->integer('id_district')->unsigned()->nullable()->default(0);
      $table->integer('id_village')->unsigned()->nullable()->default(0);
      $table->integer('id_participant')->unsigned()->nullable();
      $table->timestamp('date_start')->nullable();
      $table->timestamp('date_end')->nullable();
      $table->integer('rt')->nullable();
      $table->integer('rw')->nullable();
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
      $table->softDeletes();
      $table->foreign('id_area')->references('id')->on('tps_location_areas')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_district')->references('id')->on('tps_location_districts')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_village')->references('id')->on('tps_location_villages')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_participant')->references('id')->on('tps_participants')->onDelete('restrict')->onUpdate('restrict');
    });
  }

  public function down() {
    Schema::dropIfExists('tps_selections');
  }
}
