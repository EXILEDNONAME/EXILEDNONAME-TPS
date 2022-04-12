@extends('layouts.default', ['page' => 'blank'])
@push('title', 'Dashboard')

@push('body')
DAPIL 1 : <br>
{{ \DB::table('tps_location_districts')->where('id_area', 1)->get()->count(); }} KECAMATAN <br>
@php $data_1 = \DB::table('tps_location_districts')->where('id_area', 1)->get(); @endphp
@foreach($data_1 as $data_1)
@php $data_2 = \DB::table('tps_location_villages')->where('id_district', $data_1->id)->get(); @endphp
@foreach($data_2 as $data_2)
@php $data_3 = \DB::table('tps_location_rws')->where('id_village', $data_2->id)->get(); @endphp
KECAMATAN {{ $data_1->name }} - {{ $data_2->name }} -
{{ $data_3->count() }} RW <br>
@endforeach
@endforeach

<hr>

JUMLAH DAPIL : {{ \DB::table('tps_location_areas')->get()->count(); }} <br>
JUMLAH KECAMATAN : {{ \DB::table('tps_location_districts')->get()->count(); }} <br>
JUMLAH KELURAHAN : {{ \DB::table('tps_location_villages')->get()->count(); }} <br>
@endpush
