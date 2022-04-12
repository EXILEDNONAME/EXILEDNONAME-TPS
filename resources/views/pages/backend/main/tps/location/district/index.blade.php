@extends('layouts.datatable.__index', ['page' => 'index', 'daterange' => 'false', 'status' => 'false', 'chart' => 'true'])
@push('title', 'Table Generals')

@push('table-header')
<th> Area </th>
<th> Name </th>
@endpush

@push('table-body')
{ data: 'id_areas', 'className': 'align-middle text-center', 'width': '1', },
{ data: 'name' },
@endpush

@push('filter-head')
<div class="mb-2">
  <div class="col-lg-12 my-2 my-md-0">
    <div class="d-flex align-items-center">
      {!! Form::select(NULL, filter_tps_areas(), NULL, ['data-column' => 2, 'placeholder' => '- Select Area -', 'class' => 'form-control filter-tps-areas']) !!}
    </div>
  </div>
</div>
@endpush

@push('filter-function')
d.filter_tps_areas = $('.filter_tps_areas').val();
@endpush

@push('filter-body')
$('.filter-tps-areas').change(function () {
  table.column(2).search( $(this).val() ).draw();
});
@endpush
