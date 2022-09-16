@extends('layouts.datatable.__index', ['page' => 'index', 'demo_table_relation' => 'true'])
@push('title', 'Table Relations')

@push('table-header')
<th> General </th>
<th> Description </th>
@endpush

@push('table-body')
{ data: 'id_generals' },
{ data: 'description' },
@endpush

@push('filter-header')
<div class="mb-2">
  <div class="col-lg-12 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_table_generals(), NULL, ['data-column' => 2, 'placeholder' => '- Select General -', 'class' => 'form-control filter-form filter-table-general']) !!}
  </div>
</div>
</div>
@endpush

@push('filter-function')
d.filter_table_general = $('#filter_table_general').val();
@endpush

@push('filter-data')
$('.filter-table-general').change(function () {
  table.column(2)
  .search( $(this).val() )
  .draw();
});
@endpush
