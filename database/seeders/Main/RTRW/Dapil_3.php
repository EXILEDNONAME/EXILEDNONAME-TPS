<?php

namespace Database\Seeders\Main\RTRW;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\RW;
use App\Models\Backend\Main\TPS\Location\RT;

class Dapil_3 extends Seeder {
  public function run() {

    // RTRW KECAMATAN KIARACONDONG
    for ($i = 1; $i <= 15;  $i++) { $data = [ 'id_village' => '48', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 14;  $i++) { $data = [ 'id_village' => '49', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 15;  $i++) { $data = [ 'id_village' => '50', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 12;  $i++) { $data = [ 'id_village' => '51', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 18;  $i++) { $data = [ 'id_village' => '52', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11;  $i++) { $data = [ 'id_village' => '53', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 109; $i++) { $data = [ 'id_village' => '48', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 89;  $i++) { $data = [ 'id_village' => '49', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 101; $i++) { $data = [ 'id_village' => '50', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 78;  $i++) { $data = [ 'id_village' => '51', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 146; $i++) { $data = [ 'id_village' => '52', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 70;  $i++) { $data = [ 'id_village' => '53', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN BATUNUNGGAL
    for ($i = 1; $i <= 12;  $i++) { $data = [ 'id_village' => '54', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 12;  $i++) { $data = [ 'id_village' => '55', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 13;  $i++) { $data = [ 'id_village' => '56', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;   $i++) { $data = [ 'id_village' => '57', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;   $i++) { $data = [ 'id_village' => '58', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;   $i++) { $data = [ 'id_village' => '59', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11;  $i++) { $data = [ 'id_village' => '60', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10;  $i++) { $data = [ 'id_village' => '61', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 88;  $i++) { $data = [ 'id_village' => '54', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 71;  $i++) { $data = [ 'id_village' => '55', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 82;  $i++) { $data = [ 'id_village' => '56', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 49;  $i++) { $data = [ 'id_village' => '57', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 67;  $i++) { $data = [ 'id_village' => '58', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 50;  $i++) { $data = [ 'id_village' => '59', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 68;  $i++) { $data = [ 'id_village' => '60', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 72;  $i++) { $data = [ 'id_village' => '61', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }

    // RTRW KECAMATAN LENGKONG
    for ($i = 1; $i <= 7;  $i++) { $data = [ 'id_village' => '62', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 10;  $i++) { $data = [ 'id_village' => '63', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '64', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 8;  $i++) { $data = [ 'id_village' => '65', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11;  $i++) { $data = [ 'id_village' => '66', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 11;  $i++) { $data = [ 'id_village' => '67', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 9;  $i++) { $data = [ 'id_village' => '68', 'name'  => $i, 'created_at'  => Carbon::now() ]; RW::insert($data); }
    for ($i = 1; $i <= 51;  $i++) { $data = [ 'id_village' => '62', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 74;  $i++) { $data = [ 'id_village' => '63', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 65;  $i++) { $data = [ 'id_village' => '64', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 43;  $i++) { $data = [ 'id_village' => '65', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 87;  $i++) { $data = [ 'id_village' => '66', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 58;  $i++) { $data = [ 'id_village' => '67', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }
    for ($i = 1; $i <= 54;  $i++) { $data = [ 'id_village' => '68', 'name'  => $i, 'created_at'  => Carbon::now() ]; RT::insert($data); }




  }
}
