@extends('layouts.datatable.__index', ['page' => 'index', 'daterange' => 'false', 'status' => 'false', 'chart' => 'true'])
@push('title', 'Participants')

@push('table-header')
<th> NIK </th>
<th> Name </th>
<th> Email </th>
<th> Phone </th>
<th> Address </th>
<th> Description </th>
@endpush

@push('table-body')
{ data: 'nik' },
{ data: 'name' },
{ data: 'email' },
{ data: 'phone' },
{ data: 'address' },
{ data: 'description' },
@endpush
