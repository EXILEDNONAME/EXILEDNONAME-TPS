<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPSParticipantsTable extends Migration {
  public function up() {
    Schema::create('tps_participants', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_position')->unsigned();
      $table->integer('id_education')->unsigned();
      $table->integer('id_job')->unsigned();
      $table->integer('id_religion')->unsigned();
      $table->timestamp('date_start')->nullable();
      $table->timestamp('date_end')->nullable();
      $table->string('nik');
      $table->string('name');
      $table->string('email');
      $table->string('phone');
      $table->string('sex');
      $table->string('photo_live');
      $table->string('photo_ktp');
      $table->string('photo_kk');
      $table->string('organization');
      $table->text('address')->nullable();
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->foreign('id_position')->references('id')->on('tps_participant_positions')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_education')->references('id')->on('tps_participant_educations')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_job')->references('id')->on('tps_participant_jobs')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_religion')->references('id')->on('tps_participant_religions')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down() {
    Schema::dropIfExists('tps_participants');
  }
}
