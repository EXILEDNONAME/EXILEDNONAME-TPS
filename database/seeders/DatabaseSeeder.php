<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

      // System
      $this->call(Default\Accesses::class);
      $this->call(Default\Users::class);

      // Main
      $this->call(Main\Areas::class);
      $this->call(Main\Districts::class);
      $this->call(Main\Villages::class);
      $this->call(Main\ParticipantPositions::class);
      $this->call(Main\ParticipantEducations::class);
      $this->call(Main\ParticipantJobs::class);
      $this->call(Main\ParticipantReligions::class);

      $this->call(Main\RTRW\Dapil_1::class);
      $this->call(Main\RTRW\Dapil_2::class);
      $this->call(Main\RTRW\Dapil_3::class);
      $this->call(Main\RTRW\Dapil_4::class);
      $this->call(Main\RTRW\Dapil_5::class);
      $this->call(Main\RTRW\Dapil_6::class);

    }
}
