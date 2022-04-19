<?php

namespace Database\Seeders\Main;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\ParticipantReligion;

class ParticipantReligions extends Seeder {
  public function run() {
    $data = [
      [ 'name'  => 'Islam', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'Kristen', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'Katholik', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'Hindu', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'Budha', 'created_at'  => Carbon::now() ],
    ];

    ParticipantReligion::insert($data);
  }
}
