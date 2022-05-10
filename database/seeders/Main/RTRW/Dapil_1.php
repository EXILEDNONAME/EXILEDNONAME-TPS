<?php

namespace Database\Seeders\Main\RTRW;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\RW;
use App\Models\Backend\Main\TPS\Location\RT;

class Dapil_1 extends Seeder {
  public function run() {

    // RTRW KECAMATAN ANDIR
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '1', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '2', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10; $i++) { $data = [ 'id_village' => '3', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '4', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '5', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;  $i++) { $data = [ 'id_village' => '6', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 62; $i++) { $data = [ 'id_village' => '1', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 84; $i++) { $data = [ 'id_village' => '2', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 87; $i++) { $data = [ 'id_village' => '3', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 72; $i++) { $data = [ 'id_village' => '4', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 38; $i++) { $data = [ 'id_village' => '5', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 38; $i++) { $data = [ 'id_village' => '6', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN CICENDO
    for ($i = 1; $i <= 12; $i++) { $data = [ 'id_village' => '7', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '8', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10; $i++) { $data = [ 'id_village' => '9', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10; $i++) { $data = [ 'id_village' => '10', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '11', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10; $i++) { $data = [ 'id_village' => '12', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 77; $i++) { $data = [ 'id_village' => '7', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 80; $i++) { $data = [ 'id_village' => '8', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 69; $i++) { $data = [ 'id_village' => '9', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 60; $i++) { $data = [ 'id_village' => '10', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 54; $i++) { $data = [ 'id_village' => '11', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 71; $i++) { $data = [ 'id_village' => '12', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN SUKAJADI
    for ($i = 1; $i <= 13; $i++) { $data = [ 'id_village' => '13', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '14', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;  $i++) { $data = [ 'id_village' => '15', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '16', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 12; $i++) { $data = [ 'id_village' => '17', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 92; $i++) { $data = [ 'id_village' => '13', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 77; $i++) { $data = [ 'id_village' => '14', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 45; $i++) { $data = [ 'id_village' => '15', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 36; $i++) { $data = [ 'id_village' => '16', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 81; $i++) { $data = [ 'id_village' => '17', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN SUKAJADI
    for ($i = 1; $i <= 6;   $i++) { $data = [ 'id_village' => '18', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;   $i++) { $data = [ 'id_village' => '19', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;   $i++) { $data = [ 'id_village' => '20', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11;  $i++) { $data = [ 'id_village' => '21', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 25;  $i++) { $data = [ 'id_village' => '18', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 38;  $i++) { $data = [ 'id_village' => '19', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 57;  $i++) { $data = [ 'id_village' => '20', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 100; $i++) { $data = [ 'id_village' => '21', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

  }
}
