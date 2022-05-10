<?php

namespace Database\Seeders\Main\RTRW;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\RW;
use App\Models\Backend\Main\TPS\Location\RT;

class Dapil_6 extends Seeder {
  public function run() {

    // RTRW KECAMATAN ASTANAANYAR
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '121', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;  $i++) { $data = [ 'id_village' => '122', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '123', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '124', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '125', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10; $i++) { $data = [ 'id_village' => '126', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 45; $i++) { $data = [ 'id_village' => '121', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 47; $i++) { $data = [ 'id_village' => '122', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 45; $i++) { $data = [ 'id_village' => '123', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 32; $i++) { $data = [ 'id_village' => '124', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 76; $i++) { $data = [ 'id_village' => '125', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 60; $i++) { $data = [ 'id_village' => '126', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN BOJONGLOA KALER
    for ($i = 1; $i <= 12;  $i++) { $data = [ 'id_village' => '127', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;   $i++) { $data = [ 'id_village' => '128', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11;  $i++) { $data = [ 'id_village' => '129', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;   $i++) { $data = [ 'id_village' => '130', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10;  $i++) { $data = [ 'id_village' => '131', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 86;  $i++) { $data = [ 'id_village' => '127', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 70;  $i++) { $data = [ 'id_village' => '128', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 105; $i++) { $data = [ 'id_village' => '129', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 58;  $i++) { $data = [ 'id_village' => '130', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 75;  $i++) { $data = [ 'id_village' => '131', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN BABAKAN CIPARAY
    for ($i = 1; $i <= 13; $i++) { $data = [ 'id_village' => '132', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '133', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10; $i++) { $data = [ 'id_village' => '134', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '135', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '136', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 5;  $i++) { $data = [ 'id_village' => '137', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 88; $i++) { $data = [ 'id_village' => '132', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 57; $i++) { $data = [ 'id_village' => '133', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 80; $i++) { $data = [ 'id_village' => '134', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 56; $i++) { $data = [ 'id_village' => '135', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 43; $i++) { $data = [ 'id_village' => '136', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 32; $i++) { $data = [ 'id_village' => '137', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN BOJONGLOA KIDUL
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '138', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '139', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '140', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;  $i++) { $data = [ 'id_village' => '141', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '142', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 4;  $i++) { $data = [ 'id_village' => '143', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 84; $i++) { $data = [ 'id_village' => '138', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 70; $i++) { $data = [ 'id_village' => '139', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 30; $i++) { $data = [ 'id_village' => '140', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 24; $i++) { $data = [ 'id_village' => '141', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 29; $i++) { $data = [ 'id_village' => '142', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 24; $i++) { $data = [ 'id_village' => '143', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN BANDUNG KULON
    for ($i = 1; $i <= 10;  $i++) { $data = [ 'id_village' => '144', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10;  $i++) { $data = [ 'id_village' => '145', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10;  $i++) { $data = [ 'id_village' => '146', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '147', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 14;  $i++) { $data = [ 'id_village' => '148', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10;  $i++) { $data = [ 'id_village' => '149', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '150', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '151', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 73;  $i++) { $data = [ 'id_village' => '144', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 73;  $i++) { $data = [ 'id_village' => '145', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 74;  $i++) { $data = [ 'id_village' => '146', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 35;  $i++) { $data = [ 'id_village' => '147', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 47;  $i++) { $data = [ 'id_village' => '148', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 67;  $i++) { $data = [ 'id_village' => '149', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 45;  $i++) { $data = [ 'id_village' => '150', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 35;  $i++) { $data = [ 'id_village' => '151', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }



  }
}
