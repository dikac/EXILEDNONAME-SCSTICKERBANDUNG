@extends('layouts.datatable.__index', ['page' => 'index', 'demo_table' => 'true', 'status' => 'true', 'daterange' => 'true'])
@push('title', 'Table Generals')

@push('table-header')
<th> Name </th>
<th> Description </th>
@endpush

@push('table-body')
{ data: 'name' },
{ data: 'description' },
@endpush
