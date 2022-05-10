<?php

namespace Database\Seeders\Main\RTRW;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\RW;
use App\Models\Backend\Main\TPS\Location\RT;

class Dapil_5 extends Seeder {
  public function run() {

    // RTRW KECAMATAN REGOL
    for ($i = 1; $i <= 12; $i++) { $data = [ 'id_village' => '98', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '99', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '100', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;  $i++) { $data = [ 'id_village' => '101', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '102', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '103', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '104', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 64; $i++) { $data = [ 'id_village' => '98', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 55; $i++) { $data = [ 'id_village' => '99', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 46; $i++) { $data = [ 'id_village' => '100', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 45; $i++) { $data = [ 'id_village' => '101', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 50; $i++) { $data = [ 'id_village' => '102', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 50; $i++) { $data = [ 'id_village' => '103', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 63; $i++) { $data = [ 'id_village' => '104', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN RANCASARI
    for ($i = 1; $i <= 12;  $i++) { $data = [ 'id_village' => '105', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 16;  $i++) { $data = [ 'id_village' => '106', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 13;  $i++) { $data = [ 'id_village' => '107', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11;  $i++) { $data = [ 'id_village' => '108', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 96;  $i++) { $data = [ 'id_village' => '105', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 96;  $i++) { $data = [ 'id_village' => '106', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 80;  $i++) { $data = [ 'id_village' => '107', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 67;  $i++) { $data = [ 'id_village' => '108', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN BUAH BATU
    for ($i = 1; $i <= 14;  $i++) { $data = [ 'id_village' => '109', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 21;  $i++) { $data = [ 'id_village' => '110', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 13;  $i++) { $data = [ 'id_village' => '111', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;   $i++) { $data = [ 'id_village' => '112', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 94;  $i++) { $data = [ 'id_village' => '109', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 152; $i++) { $data = [ 'id_village' => '110', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 81;  $i++) { $data = [ 'id_village' => '111', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 45;  $i++) { $data = [ 'id_village' => '112', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN BANDUNG KIDUL
    for ($i = 1; $i <= 12; $i++) { $data = [ 'id_village' => '113', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;  $i++) { $data = [ 'id_village' => '114', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 5;  $i++) { $data = [ 'id_village' => '115', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10; $i++) { $data = [ 'id_village' => '116', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 64; $i++) { $data = [ 'id_village' => '113', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 32; $i++) { $data = [ 'id_village' => '114', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 27; $i++) { $data = [ 'id_village' => '115', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 71; $i++) { $data = [ 'id_village' => '116', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN GEDE BAGE
    for ($i = 1; $i <= 10; $i++) { $data = [ 'id_village' => '117', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 15; $i++) { $data = [ 'id_village' => '118', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '119', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '120', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 57; $i++) { $data = [ 'id_village' => '117', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 84; $i++) { $data = [ 'id_village' => '118', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 30; $i++) { $data = [ 'id_village' => '119', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 34; $i++) { $data = [ 'id_village' => '120', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }



  }
}
