<?php

namespace Database\Seeders\Main\RTRW;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\RW;
use App\Models\Backend\Main\TPS\Location\RT;

class Dapil_4 extends Seeder {
  public function run() {

    // RTRW KECAMATAN ANTAPANI
    for ($i = 1; $i <= 12;  $i++) { $data = [ 'id_village' => '69', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 24;  $i++) { $data = [ 'id_village' => '70', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;   $i++) { $data = [ 'id_village' => '71', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 19;  $i++) { $data = [ 'id_village' => '72', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 70;  $i++) { $data = [ 'id_village' => '69', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 113; $i++) { $data = [ 'id_village' => '70', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 41;  $i++) { $data = [ 'id_village' => '71', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 112; $i++) { $data = [ 'id_village' => '72', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN ARCAMANIK
    for ($i = 1; $i <= 17; $i++) { $data = [ 'id_village' => '73', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '74', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '75', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 12; $i++) { $data = [ 'id_village' => '76', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 92; $i++) { $data = [ 'id_village' => '73', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 49; $i++) { $data = [ 'id_village' => '74', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 61; $i++) { $data = [ 'id_village' => '75', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 66; $i++) { $data = [ 'id_village' => '76', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN UJUNG BERUNG
    for ($i = 1; $i <= 7; $i++) { $data = [ 'id_village' => '77', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '78', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 12; $i++) { $data = [ 'id_village' => '79', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 14; $i++) { $data = [ 'id_village' => '80', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 15; $i++) { $data = [ 'id_village' => '81', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 49; $i++) { $data = [ 'id_village' => '77', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 66; $i++) { $data = [ 'id_village' => '78', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 64; $i++) { $data = [ 'id_village' => '79', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 67; $i++) { $data = [ 'id_village' => '80', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 66; $i++) { $data = [ 'id_village' => '81', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN CIBIRU
    for ($i = 1; $i <= 17; $i++) { $data = [ 'id_village' => '82', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 12; $i++) { $data = [ 'id_village' => '83', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10; $i++) { $data = [ 'id_village' => '84', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 14; $i++) { $data = [ 'id_village' => '85', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 83; $i++) { $data = [ 'id_village' => '82', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 65; $i++) { $data = [ 'id_village' => '83', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 53; $i++) { $data = [ 'id_village' => '84', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 82; $i++) { $data = [ 'id_village' => '85', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN PANYILEUKAN
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '86', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '87', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 14; $i++) { $data = [ 'id_village' => '88', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '89', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 52; $i++) { $data = [ 'id_village' => '86', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 19; $i++) { $data = [ 'id_village' => '87', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 78; $i++) { $data = [ 'id_village' => '88', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 36; $i++) { $data = [ 'id_village' => '89', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN CINAMBO
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '90', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 5;  $i++) { $data = [ 'id_village' => '91', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '92', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '93', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 26; $i++) { $data = [ 'id_village' => '90', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 23; $i++) { $data = [ 'id_village' => '91', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 25; $i++) { $data = [ 'id_village' => '92', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 29; $i++) { $data = [ 'id_village' => '93', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN MANDALAJATI
    for ($i = 1; $i <= 17;  $i++) { $data = [ 'id_village' => '94', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 13;  $i++) { $data = [ 'id_village' => '95', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 12;  $i++) { $data = [ 'id_village' => '96', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11;  $i++) { $data = [ 'id_village' => '97', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 117;  $i++) { $data = [ 'id_village' => '94', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 78;  $i++) { $data = [ 'id_village' => '95', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 60;  $i++) { $data = [ 'id_village' => '96', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 57;  $i++) { $data = [ 'id_village' => '97', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }


  }
}
