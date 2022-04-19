<?php

namespace Database\Seeders\Main;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\ParticipantJob;

class ParticipantJobs extends Seeder {
  public function run() {
    $data = [
      [ 'name'  => 'Pelajar/Mahasiswa', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'Pegawai Negeri Sipil', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'Karyawan', 'created_at'  => Carbon::now() ],
      [ 'name'  => 'Wiraswasta', 'created_at'  => Carbon::now() ],
    ];

    ParticipantJob::insert($data);
  }
}
