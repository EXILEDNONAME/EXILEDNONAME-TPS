<?php

namespace Database\Seeders\Main;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\TPS\Location\Village;

class Villages extends Seeder {
  public function run() {
    $data = [

      // DAPIL-1 :: KECAMATAN-1
      [ 'id_district' => '1', 'name'  => 'Maleber', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '1', 'name'  => 'Dunguscariang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '1', 'name'  => 'Ciroyom', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '1', 'name'  => 'Kebon Jeruk', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '1', 'name'  => 'Garuda', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '1', 'name'  => 'Campaka', 'created_at'  => Carbon::now() ],

      // DAPIL-1 :: KECAMATAN-2
      [ 'id_district' => '2', 'name'  => 'Husein Sastranegara', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '2', 'name'  => 'Arjuna', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '2', 'name'  => 'Pajajaran', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '2', 'name'  => 'Pasirkaliki', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '2', 'name'  => 'Pamoyanan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '2', 'name'  => 'Sukaraja', 'created_at'  => Carbon::now() ],

      // DAPIL-1 :: KECAMATAN-3
      [ 'id_district' => '3', 'name'  => 'Pasteur', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '3', 'name'  => 'Cipedes', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '3', 'name'  => 'Sukawarna', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '3', 'name'  => 'Sukagalih', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '3', 'name'  => 'Sukabungah', 'created_at'  => Carbon::now() ],

      // DAPIL-1 :: KECAMATAN-4
      [ 'id_district' => '4', 'name'  => 'Isola', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '4', 'name'  => 'Sukarasa', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '4', 'name'  => 'Gegerkalong', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '4', 'name'  => 'Sarijadi', 'created_at'  => Carbon::now() ],

      // DAPIL-2 :: KECAMATAN-1
      [ 'id_district' => '5', 'name'  => 'Hegarmanah', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '5', 'name'  => 'Ciumbuleuit', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '5', 'name'  => 'Ledeng', 'created_at'  => Carbon::now() ],

      // DAPIL-2 :: KECAMATAN-2
      [ 'id_district' => '6', 'name'  => 'Cipaganti', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '6', 'name'  => 'Lebak Gede', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '6', 'name'  => 'Sadang Serang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '6', 'name'  => 'Dago', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '6', 'name'  => 'Sekeloa', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '6', 'name'  => 'Lebak Siliwangi', 'created_at'  => Carbon::now() ],

      // DAPIL-2 :: KECAMATAN-3
      [ 'id_district' => '7', 'name'  => 'Cihapit', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '7', 'name'  => 'Tamansari', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '7', 'name'  => 'Citarum', 'created_at'  => Carbon::now() ],

      // DAPIL-2 :: KECAMATAN-4
      [ 'id_district' => '8', 'name'  => 'Braga', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '8', 'name'  => 'Merdeka', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '8', 'name'  => 'Kebon Pisang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '8', 'name'  => 'Babakan Ciamis', 'created_at'  => Carbon::now() ],

      // DAPIL-2 :: KECAMATAN-5
      [ 'id_district' => '9', 'name'  => 'Cihaurgeulis', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '9', 'name'  => 'Sukaluyu', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '9', 'name'  => 'Neglasari', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '9', 'name'  => 'Cigadung', 'created_at'  => Carbon::now() ],

      // DAPIL-2 :: KECAMATAN-6
      [ 'id_district' => '10', 'name'  => 'Padasuka', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '10', 'name'  => 'Cikutra', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '10', 'name'  => 'Cicadas', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '10', 'name'  => 'Sukamaju', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '10', 'name'  => 'Sukapada', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '10', 'name'  => 'Pasirlayung', 'created_at'  => Carbon::now() ],

      // DAPIL-3 :: KECAMATAN-1
      [ 'id_district' => '11', 'name'  => 'Sukapura', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '11', 'name'  => 'Kebon Jayanti', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '11', 'name'  => 'Babakan Surabaya', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '11', 'name'  => 'Cicaheum', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '11', 'name'  => 'Babakan Sari', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '11', 'name'  => 'Kebon Kangkung', 'created_at'  => Carbon::now() ],

      // DAPIL-3 :: KECAMATAN-2
      [ 'id_district' => '12', 'name'  => 'Gumuruh', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '12', 'name'  => 'Maleer', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '12', 'name'  => 'Cibangkong', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '12', 'name'  => 'Kacapiring', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '12', 'name'  => 'Kebon Waru', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '12', 'name'  => 'Kebon Gedang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '12', 'name'  => 'Samoja', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '12', 'name'  => 'Binong', 'created_at'  => Carbon::now() ],

      // DAPIL-3 :: KECAMATAN-3
      [ 'id_district' => '13', 'name'  => 'Cijagra', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '13', 'name'  => 'Lingkar Selatan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '13', 'name'  => 'Burangrang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '13', 'name'  => 'Paledang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '13', 'name'  => 'Turangga', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '13', 'name'  => 'Malabar', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '13', 'name'  => 'Cikawao', 'created_at'  => Carbon::now() ],

      // DAPIL-4 :: KECAMATAN-1
      [ 'id_district' => '14', 'name'  => 'Antapani Wetan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '14', 'name'  => 'Antapani Tengah', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '14', 'name'  => 'Antapani Kulon', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '14', 'name'  => 'Antapani Kidul', 'created_at'  => Carbon::now() ],

      // DAPIL-4 :: KECAMATAN-2
      [ 'id_district' => '15', 'name'  => 'Sukamiskin', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '15', 'name'  => 'Cisaranten Bina Harapan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '15', 'name'  => 'Cisaranten Kulon', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '15', 'name'  => 'Cisaranten Endah', 'created_at'  => Carbon::now() ],

      // DAPIL-4 :: KECAMATAN-3
      [ 'id_district' => '16', 'name'  => 'Pasir Endah', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '16', 'name'  => 'Cigending', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '16', 'name'  => 'Pasir Wangi', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '16', 'name'  => 'Pasir Jati', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '16', 'name'  => 'Pasanggrahan', 'created_at'  => Carbon::now() ],

      // DAPIL-4 :: KECAMATAN-4
      [ 'id_district' => '17', 'name'  => 'Cipadung', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '17', 'name'  => 'Pasir Biru', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '17', 'name'  => 'Cisurupan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '17', 'name'  => 'Palasari', 'created_at'  => Carbon::now() ],

      // DAPIL-4 :: KECAMATAN-5
      [ 'id_district' => '18', 'name'  => 'Cipadung Kulon', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '18', 'name'  => 'Cipadung Wetan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '18', 'name'  => 'Cipadung Kidul', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '18', 'name'  => 'Mekar Mulya', 'created_at'  => Carbon::now() ],

      // DAPIL-4 :: KECAMATAN-6
      [ 'id_district' => '19', 'name'  => 'Cisaranten Wetan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '19', 'name'  => 'Pakemitan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '19', 'name'  => 'Sukamulya', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '19', 'name'  => 'Babakan Penghulu', 'created_at'  => Carbon::now() ],

      // DAPIL-4 :: KECAMATAN-7
      [ 'id_district' => '20', 'name'  => 'Jati Handap', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '20', 'name'  => 'Karang Pamulang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '20', 'name'  => 'Sindang Jaya', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '20', 'name'  => 'Pasir Impun', 'created_at'  => Carbon::now() ],

      // DAPIL-5 :: KECAMATAN-1
      [ 'id_district' => '21', 'name'  => 'Cigereleng', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '21', 'name'  => 'Ancol', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '21', 'name'  => 'Pungkur', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '21', 'name'  => 'Balonggede', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '21', 'name'  => 'Ciseureuh', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '21', 'name'  => 'Ciateul', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '21', 'name'  => 'Pasirluyu', 'created_at'  => Carbon::now() ],

      // DAPIL-5 :: KECAMATAN-2
      [ 'id_district' => '22', 'name'  => 'Cipamokolan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '22', 'name'  => 'Manjahlega', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '22', 'name'  => 'Derwati', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '22', 'name'  => 'Mekar Jaya', 'created_at'  => Carbon::now() ],

      // DAPIL-5 :: KECAMATAN-3
      [ 'id_district' => '23', 'name'  => 'Sekejati', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '23', 'name'  => 'Margasari', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '23', 'name'  => 'Cijawura', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '23', 'name'  => 'Jatisari', 'created_at'  => Carbon::now() ],

      // DAPIL-5 :: KECAMATAN-4
      [ 'id_district' => '24', 'name'  => 'Batununggal', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '24', 'name'  => 'Wates', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '24', 'name'  => 'Mengger', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '24', 'name'  => 'Kujangsari', 'created_at'  => Carbon::now() ],

      // DAPIL-5 :: KECAMATAN-5
      [ 'id_district' => '25', 'name'  => 'Ranca Bolang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '25', 'name'  => 'Cisaranten Kidul', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '25', 'name'  => 'Cimincrang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '25', 'name'  => 'Rancanumpang', 'created_at'  => Carbon::now() ],

      // DAPIL-6 :: KECAMATAN-1
      [ 'id_district' => '26', 'name'  => 'Karasak', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '26', 'name'  => 'Nyengseret', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '26', 'name'  => 'Karang Anyar', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '26', 'name'  => 'Panjunan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '26', 'name'  => 'Cibadak', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '26', 'name'  => 'Pelindung Hewan', 'created_at'  => Carbon::now() ],

      // DAPIL-6 :: KECAMATAN-2
      [ 'id_district' => '27', 'name'  => 'Kopo', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '27', 'name'  => 'Babakan Tarogong', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '27', 'name'  => 'Jamika', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '27', 'name'  => 'Babakan Asih', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '27', 'name'  => 'Sukaasih', 'created_at'  => Carbon::now() ],

      // DAPIL-6 :: KECAMATAN-3
      [ 'id_district' => '28', 'name'  => 'Babakan', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '28', 'name'  => 'Babakan Ciparay', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '28', 'name'  => 'Sukahaji', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '28', 'name'  => 'Margahayu Utara', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '28', 'name'  => 'Margasuka', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '28', 'name'  => 'Cirangrang', 'created_at'  => Carbon::now() ],

      // DAPIL-6 :: KECAMATAN-4
      [ 'id_district' => '29', 'name'  => 'Situsaeur', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '29', 'name'  => 'Kebon Lega', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '29', 'name'  => 'Cibaduyut', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '29', 'name'  => 'Mekar Wangi', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '29', 'name'  => 'Cibaduyut Kidul', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '29', 'name'  => 'Cibaduyut Wetan', 'created_at'  => Carbon::now() ],

      // DAPIL-6 :: KECAMATAN-5
      [ 'id_district' => '30', 'name'  => 'Cijerah', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '30', 'name'  => 'Cibuntu', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '30', 'name'  => 'Warung Muncang', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '30', 'name'  => 'Caringin', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '30', 'name'  => 'Cigondewah Kaler', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '30', 'name'  => 'Gempol Sari', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '30', 'name'  => 'Cigondewah Rahayu', 'created_at'  => Carbon::now() ],
      [ 'id_district' => '30', 'name'  => 'Cigondewah Kidul', 'created_at'  => Carbon::now() ],
    ];

    Village::insert($data);
  }
}
