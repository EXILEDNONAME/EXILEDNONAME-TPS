@extends('layouts.datatable.__index', ['page' => 'index', 'daterange' => 'false', 'status' => 'false', 'chart' => 'true'])
@push('title', 'Participants')

@push('table-header')
<th> Name </th>
<th> Description </th>
@endpush

@push('table-body')
{ data: 'name' },
{ data: 'description' },
@endpush
