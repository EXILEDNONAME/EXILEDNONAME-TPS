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
