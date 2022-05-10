<?php

namespace Database\Seeders\Main\RTRW;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\RW;
use App\Models\Backend\Main\TPS\Location\RT;

class Dapil_2 extends Seeder {
  public function run() {

    // RTRW KECAMATAN CIDADAP
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '22', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11; $i++) { $data = [ 'id_village' => '23', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 7;  $i++) { $data = [ 'id_village' => '24', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 66; $i++) { $data = [ 'id_village' => '22', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 78; $i++) { $data = [ 'id_village' => '23', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 27; $i++) { $data = [ 'id_village' => '24', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN COBLONG
    for ($i = 1; $i <= 7;  $i++) { $data = [ 'id_village' => '25', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 13; $i++) { $data = [ 'id_village' => '26', 'name'  => $i, 'created_at'  => Carbon::now() ]; Rw::insert($data); }
    for ($i = 1; $i <= 21; $i++) { $data = [ 'id_village' => '27', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 13; $i++) { $data = [ 'id_village' => '28', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 15; $i++) { $data = [ 'id_village' => '29', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 6;  $i++) { $data = [ 'id_village' => '30', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 52;  $i++) { $data = [ 'id_village' => '25', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 64; $i++) { $data = [ 'id_village' => '26', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 127; $i++) { $data = [ 'id_village' => '27', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 105; $i++) { $data = [ 'id_village' => '28', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 88; $i++) { $data = [ 'id_village' => '29', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 25;  $i++) { $data = [ 'id_village' => '30', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN BANDUNG WETAN
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '31', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 20;  $i++) { $data = [ 'id_village' => '32', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '33', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 46;  $i++) { $data = [ 'id_village' => '31', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 115;  $i++) { $data = [ 'id_village' => '32', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 36;  $i++) { $data = [ 'id_village' => '33', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN SUMUR BANDUNG
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '34', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '35', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 12;  $i++) { $data = [ 'id_village' => '36', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '37', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 45;  $i++) { $data = [ 'id_village' => '34', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 58;  $i++) { $data = [ 'id_village' => '35', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 85;  $i++) { $data = [ 'id_village' => '36', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 43;  $i++) { $data = [ 'id_village' => '37', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN CIBEUNYING KALER
    for ($i = 1; $i <= 12;  $i++) { $data = [ 'id_village' => '38', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11;  $i++) { $data = [ 'id_village' => '39', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '40', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 15;  $i++) { $data = [ 'id_village' => '41', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 68;  $i++) { $data = [ 'id_village' => '38', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 92;  $i++) { $data = [ 'id_village' => '39', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 39;  $i++) { $data = [ 'id_village' => '40', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 91;  $i++) { $data = [ 'id_village' => '41', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN CIBEUNYING KIDUL
    for ($i = 1; $i <= 16;  $i++) { $data = [ 'id_village' => '42', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 15;  $i++) { $data = [ 'id_village' => '43', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 15;  $i++) { $data = [ 'id_village' => '44', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 12;  $i++) { $data = [ 'id_village' => '45', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 16;  $i++) { $data = [ 'id_village' => '46', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 13;  $i++) { $data = [ 'id_village' => '47', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 103;  $i++) { $data = [ 'id_village' => '42', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 107;  $i++) { $data = [ 'id_village' => '43', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 86;  $i++) { $data = [ 'id_village' => '44', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 81;  $i++) { $data = [ 'id_village' => '45', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 98;  $i++) { $data = [ 'id_village' => '46', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 87;  $i++) { $data = [ 'id_village' => '47', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }




  }
}
