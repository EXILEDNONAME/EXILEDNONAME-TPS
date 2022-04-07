<?php

namespace Database\Seeders\Main;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\Village;

class Villages extends Seeder {
  public function run() {
    $data = [

      // KECAMATAN-1
      [ 'id_district' => '1', 'name'  => 'Maleber', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '1', 'name'  => 'Dunguscariang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '1', 'name'  => 'Ciroyom', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '1', 'name'  => 'Kebon Jeruk', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '1', 'name'  => 'Garuda', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '1', 'name'  => 'Campaka', 'created_at'  => Carbon::now() ],

      // KECAMATAN-2
      [ 'id_district' => '2', 'name'  => 'Husein Sastranegara', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '2', 'name'  => 'Arjuna', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '2', 'name'  => 'Pajajaran', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '2', 'name'  => 'Pasirkaliki', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '2', 'name'  => 'Pamoyanan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '2', 'name'  => 'Sukaraja', 'created_at'  => Carbon::now() ],

    ];

    Village::insert($data);
  }
}
