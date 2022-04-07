<?php

namespace Database\Seeders\Main;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\Area;

class Areas extends Seeder {
  public function run() {
    $data = [
      [ 'name'  => 'DAPIL 1', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'DAPIL 2', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'DAPIL 3', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'DAPIL 4', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'DAPIL 5', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'DAPIL 6', 'created_at'  => Carbon::now() ],
    ];

    Area::insert($data);
  }
}
