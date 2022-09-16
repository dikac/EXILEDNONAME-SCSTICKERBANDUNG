@extends('layouts.datatable.__index', ['page' => 'index'])
@push('title', 'Management Accesses')

@push('table-header')
<th> Name </th>
<th> Description </th>
@endpush

@push('table-body')
{ data: 'name' },
{ data: 'description' },
@endpush
