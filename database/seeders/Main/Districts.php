<?php

namespace Database\Seeders\Main;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\District;

class Districts extends Seeder {
  public function run() {
    $data = [

      // DAPIL-1
      [ 'id_area' => '1', 'name'  => 'ANDIR', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '1', 'name'  => 'CICENDO', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '1', 'name'  => 'SUKAJADI', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '1', 'name'  => 'SUKASARI', 'created_at'  => Carbon::now() ],

      // DAPIL-2
      [ 'id_area' => '2', 'name'  => 'CIDADAP', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '2', 'name'  => 'COBLONG', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '2', 'name'  => 'BANDUNG WETAN', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '2', 'name'  => 'SUMUR BANDUNG', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '2', 'name'  => 'CIBEUNYING KALER', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '2', 'name'  => 'CIBEUNYING KIDUL', 'created_at'  => Carbon::now() ],

      // DAPIL-3
      [ 'id_area' => '3', 'name'  => 'KIARACONDONG', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '3', 'name'  => 'BATUNUNGGAL', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '3', 'name'  => 'LENGKONG', 'created_at'  => Carbon::now() ],

      // DAPIL-4
      [ 'id_area' => '4', 'name'  => 'ANTAPANI', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '4', 'name'  => 'ARCAMANIK', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '4', 'name'  => 'UJUNG BERUNG', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '4', 'name'  => 'CIBIRU', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '4', 'name'  => 'PANYILEUKAN', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '4', 'name'  => 'CINAMBO', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '4', 'name'  => 'MANDALAJATI', 'created_at'  => Carbon::now() ],

      // DAPIL-5
      [ 'id_area' => '5', 'name'  => 'REGOL', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '5', 'name'  => 'RANCASARI', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '5', 'name'  => 'BUAH BATU', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '5', 'name'  => 'BANDUNG KIDUL', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '5', 'name'  => 'GEDE BAGE', 'created_at'  => Carbon::now() ],

      // DAPIL-6
      [ 'id_area' => '6', 'name'  => 'ASTANAANYAR', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '6', 'name'  => 'BOJONGLOA KALER', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '6', 'name'  => 'BABAKAN CIPARAY', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '6', 'name'  => 'BOJONGLOA KIDUL', 'created_at'  => Carbon::now() ],
      [ 'id_area' => '6', 'name'  => 'BANDUNG KULON', 'created_at'  => Carbon::now() ],

    ];

    District::insert($data);
  }
}
