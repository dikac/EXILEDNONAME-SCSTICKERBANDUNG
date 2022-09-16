@extends('layouts.datatable.__message', ['page' => 'message'])
@push('title', 'Messages')

@push('table-header')
<th> </th>
<th> Photo </th>
<th> Test </th>
<th> Content </th>
@endpush

@push('table-body')
{
  data: 'read', orderable: false, 'className': 'align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == '1' ) { return '<i class="fas fa-envelope-open"></i>'; }
    else { return '<i class="fas fa-envelope"></i>'; }
  }
},
{ data: 'photo', orderable: false, 'className': 'align-middle', 'width': '1', },
{ data: 'test' },
{ data: 'content' },
@endpush
