<?php

namespace Database\Seeders\Main;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\ParticipantEducation;

class ParticipantEducations extends Seeder {
  public function run() {
    $data = [
      [ 'name'  => 'Tidak Sekolah', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'SD Sederajat', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'SLTP Sederajat', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'SLTA Sederajat', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'D3', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'S1', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'S2', 'created_at'  => Carbon::now() ],
    ];

    ParticipantEducation::insert($data);
  }
}
