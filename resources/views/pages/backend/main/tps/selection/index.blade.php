@extends('layouts.datatable.__index', ['page' => 'index', 'daterange' => 'false', 'status' => 'false', 'chart' => 'true'])
@push('title', 'Selections')

@push('table-header')
<th> NIK </th>
<th> Participant </th>
<th> Position </th>
<th> Area </th>
<th> Kecamatan </th>
<th> Kelurahan </th>
<th> RW </th>
<th> RT </th>
@endpush

@push('table-body')
{ data: 'id_participants_nik' },
{ data: 'id_participants_name' },
{ data: 'id_positions' },
{ data: 'id_areas' },
{ data: 'id_districts' },
{
  data: 'id_villages', orderable: true, 'className': 'align-middle text-center', 'width': '1',
  render: function ( data, type, row ) {
    return data;
  }
},
{ data: 'rws' },
{ data: 'rts' },
@endpush

@push('filter-head')
<div class="mb-2">
  <div class="col-lg-12 my-2 my-md-0">
    <div class="d-flex align-items-center">
      {!! Form::select(NULL, filter_tps_location_areas(), NULL, ['data-column' => 5, 'placeholder' => '- Select Area -', 'class' => 'form-control filter-tps-location-areas']) !!}
    </div>
  </div>
</div>

<div class="mb-2">
  <div class="col-lg-12 my-2 my-md-0">
    <div class="d-flex align-items-center">
      {!! Form::select(NULL, filter_tps_location_districts(), NULL, ['data-column' => 6, 'placeholder' => '- Select District -', 'class' => 'form-control filter-tps-location-districts']) !!}
    </div>
  </div>
</div>

<div class="mb-2">
  <div class="col-lg-12 my-2 my-md-0">
    <div class="d-flex align-items-center">
      {!! Form::select(NULL, filter_tps_location_villages(), NULL, ['data-column' => 7, 'placeholder' => '- Select Villages -', 'class' => 'form-control filter-tps-location-villages']) !!}
    </div>
  </div>
</div>
@endpush

@push('filter-function')
d.filter_tps_location_areas = $('.filter_tps_location_areas').val();
d.filter_tps_location_districts = $('.filter_tps_location_districts').val();
d.filter_tps_location_villages = $('.filter_tps_location_villages').val();
@endpush

@push('filter-body')
$('.filter-tps-location-areas').change(function () { table.column(5).search( $(this).val() ).draw(); });
$('.filter-tps-location-districts').change(function () { table.column(6).search( $(this).val() ).draw(); });
$('.filter-tps-location-villages').change(function () { table.column(7).search( $(this).val() ).draw(); });
@endpush
