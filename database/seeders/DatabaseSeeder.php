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
      $this->call(Main\RWS::class);

    }
}
