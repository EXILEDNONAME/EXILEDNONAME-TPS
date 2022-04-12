@extends('layouts.datatable.__index', ['page' => 'index', 'daterange' => 'false', 'status' => 'false', 'chart' => 'true'])
@push('title', 'Table Generals')

@push('table-header')
<th> Area </th>
<th> District </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('table-body')
{ data: 'id_areas', 'className': 'align-middle text-center', 'width': '1', },
{ data: 'id_districts', 'className': 'align-middle text-center', 'width': '1', },
{ data: 'name' },
{ data: 'description' },
@endpush

@push('filter-head')
<div class="mb-2">
  <div class="col-lg-12 my-2 my-md-0">
    <div class="d-flex align-items-center">
      {!! Form::select(NULL, filter_tps_areas(), NULL, ['data-column' => 2, 'placeholder' => '- Select Area -', 'class' => 'form-control filter-tps-areas']) !!}
    </div>
  </div>
</div>
<div class="mb-2">
  <div class="col-lg-12 my-2 my-md-0">
    <div class="d-flex align-items-center">
      {!! Form::select(NULL, filter_tps_districts(), NULL, ['data-column' => 3, 'placeholder' => '- Select District -', 'class' => 'form-control filter-tps-districts']) !!}
    </div>
  </div>
</div>
@endpush

@push('filter-function')
d.filter_tps_areas = $('.filter_tps_areas').val();
d.filter_tps_districts = $('.filter_tps_districts').val();
@endpush

@push('filter-body')
$('.filter-tps-areas').change(function () {
  table.column(2).search( $(this).val() ).draw();
});
$('.filter-tps-districts').change(function () {
  table.column(3).search( $(this).val() ).draw();
});
@endpush
