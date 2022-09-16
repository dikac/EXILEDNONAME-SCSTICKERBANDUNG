@extends('layouts.datatable.__index', ['page' => 'index'])
@push('title', 'Management Users')

@push('table-header')
<th> Name </th>
@endpush

@push('table-body')
{ data: 'name' },
@endpush
