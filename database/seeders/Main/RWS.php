<?php

namespace Database\Seeders\Main;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\RW;

class RWS extends Seeder {
  public function run() {

    for ($i = 1; $i <= 11; $i++) {
      $data = [ 'id_village' => '1', 'name'  => $i, 'created_at'  => Carbon::now() ];
      RW::insert($data);
    }

    for ($i = 1; $i <= 11; $i++) {
      $data = [ 'id_village' => '2', 'name'  => $i, 'created_at'  => Carbon::now() ];
      RW::insert($data);
    }

    for ($i = 1; $i <= 10; $i++) {
      $data = [ 'id_village' => '3', 'name'  => $i, 'created_at'  => Carbon::now() ];
      RW::insert($data);
    }

    for ($i = 1; $i <= 9; $i++) {
      $data = [ 'id_village' => '4', 'name'  => $i, 'created_at'  => Carbon::now() ];
      RW::insert($data);
    }

    for ($i = 1; $i <= 6; $i++) {
      $data = [ 'id_village' => '5', 'name'  => $i, 'created_at'  => Carbon::now() ];
      RW::insert($data);
    }

    for ($i = 1; $i <= 7; $i++) {
      $data = [ 'id_village' => '6', 'name'  => $i, 'created_at'  => Carbon::now() ];
      RW::insert($data);
    }

  }
}
