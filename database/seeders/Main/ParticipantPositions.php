<?php

namespace Database\Seeders\Main;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\ParticipantPosition;

class ParticipantPositions extends Seeder {
  public function run() {
    $data = [
      [ 'name'  => 'Koordinator Kecamatan', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'Koordinator Kelurahan', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'Koordinator RW', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'Koordinator RT', 'created_at'  => Carbon::now() ],
    ];

    ParticipantPosition::insert($data);
  }
}
