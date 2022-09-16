@extends('layouts.default')

@push('head')
<link href="/assets/backend/plugins/custom/datatables/datatables.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
@endpush

@push('content')

@if ( !empty($demo_table) && $demo_table == 'true')
<div class="alert alert-custom alert-outline-1x alert-primary fade show mb-5" role="alert">
  <div class="alert-icon"><i class="flaticon-warning"></i></div>
  <div class="alert-text">
    Hi, <b> {{ Auth::User()->name }} </b><br>
    {{ trans('default.label.notice-demotable') }}
  </div>
  <div class="alert-close">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true"><i class="ki ki-close"></i></span>
    </button>
  </div>
</div>
@endif

@if ( !empty($demo_table_relation) && $demo_table_relation == 'true')
<div class="alert alert-custom alert-outline-1x alert-primary fade show mb-5" role="alert">
  <div class="alert-icon"><i class="flaticon-warning"></i></div>
  <div class="alert-text">
    Hi, <b> {{ Auth::User()->name }} </b><br>
    {{ trans('default.label.notice-demotablerelation') }}
  </div>
  <div class="alert-close">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true"><i class="ki ki-close"></i></span>
    </button>
  </div>
</div>
@endif

<div class="row">
  <div class="col-xl-12">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
      <div class="card-header">
        <h4 class="card-title">
          <span class="card-label font-weight-bolder text-dark"> {{ trans('default.label.main') }} </span>
        </h4>
        <div class="card-toolbar">
          <a href="{{ URL::Current() }}/create" class="btn btn-icon btn-sm btn-hover-light-primary mr-1"><i class="fas fa-plus" data-toggle="tooltip" title="" data-original-title="{{ trans('default.label.create') }}"></i></a>
          <a id="table-refresh" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="refresh"><i class="fas fa-sync-alt" data-toggle="tooltip" title="" data-original-title="{{ trans('default.label.refresh') }}"></i></a>
          <div data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true"><a class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="reload" data-toggle="tooltip" data-placement="top" title="" data-original-title="Filter"><i class="fas fa-filter"></i></a></div>
          <div class="dropdown dropdown-inline" bis_skin_checked="1">
            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-download"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" bis_skin_checked="1">
              <ul class="navi navi-hover py-5">
                <li class="navi-item" data-toggle="tooltip" title="" data-original-title="Copy as Text"><a href="javascript:void(0);" class="navi-link" id="export_copy"><i class="navi-icon fa fa-copy"></i> {{ trans('default.label.export.copy') }} </a></li>
                <li class="navi-item" data-toggle="tooltip" title="" data-original-title="Export to Excel"><a href="javascript:void(0);" class="navi-link" id="export_excel"><i class="navi-icon fa fa-file-excel"></i> {{ trans('default.label.export.excel') }} </a></li>
                <li class="navi-item" data-toggle="tooltip" title="" data-original-title="Export to PDF"><a href="javascript:void(0);" class="navi-link" id="export_pdf"><i class="navi-icon fa fa-file-pdf"></i> {{ trans('default.label.export.pdf') }} </a></li>
                <li class="navi-item" data-toggle="tooltip" title="" data-original-title="Export to CSV"><a href="javascript:void(0);" class="navi-link" id="export_csv"><i class="navi-icon fa fa-file"></i> {{ trans('default.label.export.csv') }} </a></li>
                <li class="navi-item" data-toggle="tooltip" title="" data-original-title="Print"><a href="javascript:void(0);" class="navi-link" id="export_print"><i class="navi-icon fa fa-print"></i> {{ trans('default.label.export.print') }} </a></li>
              </ul>
            </div>
          </div>
          <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
          <div class="collapse" id="toolbar_delete"><a data-url="" class="delete-all btn btn-sm btn-icon btn-clean btn-icon-md" data-toggle="tooltip" title="{{ trans('default.label.delete-selected') }}"><i class="text-danger fas fa-trash"></i></a></div>
        </div>
      </div>
      <div class="card-body">

        @if ($message = Session::get('success'))
        <div id="toast-container" class="toast-bottom-right">
          <div class="toast toast-success" aria-live="polite">
            <div class="toast-message">{{ $message }}</div>
          </div>
        </div>
        @endif

        @if ($message = Session::get('error'))
        <div id="toast-container" class="toast-bottom-right">
          <div class="toast toast-error" aria-live="polite">
            <div class="toast-message">{{ $message }}</div>
          </div>
        </div>
        @endif

        <div class="accordion" id="accordionExample1">
          <div id="collapseOne1" class="collapse hide" data-parent="#accordionExample1">

            <div class="mb-2">
              <div class="col-lg-12 my-2 my-md-0">
                <div class="d-flex align-items-center">
                  <select data-column="-2" class="form-control filter-form filter-active">
                    <option value=""> - {{ trans('default.label.filter-active') }} - </option>
                    <option value="1"> {{ trans('default.label.yes') }} </option>
                    <option value="0"> {{ trans('default.label.no') }} </option>
                  </select>
                </div>
              </div>
            </div>

            @if ( !empty($status) && $status == 'true')
            <div class="mb-2">
              <div class="col-lg-12 my-2 my-md-0">
                <div class="d-flex align-items-center">
                  <select data-column="2" class="form-control filter-form filter-status">
                    <option value=""> - {{ trans('default.label.filter-status') }} - </option>
                    <option value="1"> {{ trans('default.label.success') }} </option>
                    <option value="2"> {{ trans('default.label.pending') }} </option>
                    <option value="3"> {{ trans('default.label.delivered') }} </option>
                    <option value="4"> {{ trans('default.label.canceled') }} </option>
                  </select>
                </div>
              </div>
            </div>
            @endif

            @if ( !empty($daterange) && $daterange == 'true')
            <div class="mb-2">
              <div class="col-lg-12 my-2 my-md-0">
                <div class="d-flex align-items-center">
                  <div class="input-daterange input-group" id="ex_datepicker_start">
                    <input type="text" id="date_start" class="form-control filter-form" name="date_start" autocomplete="off">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="la la-ellipsis-h"></i>
                      </span>
                    </div>
                    <input type="text" id="date_end" class="form-control" name="date_end" autocomplete="off">
                  </div>
                </div>
              </div>
            </div>
            @endif

            @stack('filter-header')

            <hr>
          </div>
        </div>

        <div class="table-responsive">
          <table width="100%" class="table table-row-bordered table-hover table-checkable" id="exilednoname">
            <thead>
              <tr>
                <th class="no-export"> </th>
                <th> No. </th>
                @if ( !empty($status) && $status == 'true')
                <th> Status </th>
                @endif
                @if ( !empty($daterange) && $daterange == 'true')
                <th> Date Start </th>
                <th> Date End </th>
                @endif
                @stack('table-header')
                <th class="no-export"> Active </th>
                <th class="no-export"> </th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-4">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
      <div class="card-header">
        <h4 class="card-title">
          <span class="card-label font-weight-bolder text-dark"> {{ trans('default.label.activities') }} </span>
        </h4>
        <div class="card-toolbar">
          <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
          <div class="collapse" id="toolbar_delete"><a data-url="" class="delete-all btn btn-sm btn-icon btn-clean btn-icon-md" data-toggle="tooltip" title="{{ trans('default.label.delete-selected') }}"><i class="text-danger fas fa-trash"></i></a></div>
        </div>
      </div>
      <div class="card-body">
        <div class="example-preview">
          <div class="timeline timeline-2">
            <div class="timeline-bar"></div>

            @php $activity = activities($model)->take(5); @endphp
            @if (!empty($activity) && !empty($activity->count()))
            @foreach($activity as $item)
            <div class="timeline-item">
              @foreach($item['properties'] as $data_object)
              @if ($item->description == 'created')
              <span class="timeline-badge bg-success"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, {{ $item->causer->name }} </span><br>
                  @if (!empty($item->causer->name) && !empty($data_object['name']))
                  Created New Item <b>{{ $data_object['name'] }}</b>
                  @else
                  Created New Item
                  @endif
                </span>
              </div>
              @endif
              @endforeach
              @if ($item->description == 'updated')
              <span class="timeline-badge bg-warning"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, {{ $item->causer->name }} </span><br>
                  @if (!empty($data_object['name']))
                  Updated Item <b>{{ $item['properties']['old']['name'] }}</b> to <b>{{ $item['properties']['attributes']['name'] }}</b>
                  @else
                  Updated Item
                  @endif
                </span>
              </div>
              @endif
              @foreach($item['properties'] as $data_object)
              @if ($item->description == 'deleted')
              <span class="timeline-badge bg-danger"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, {{ $item->causer->name }} </span><br>
                  @if (!empty($data_object['name']))
                  Deleted Item <b>{{ $data_object['name'] }}</b>
                  @else
                  Deleted Item
                  @endif
                </span>
              </div>
              @endif
              @endforeach
            </div>
            @endforeach
            @else
            <span class="text-muted"> No Recent Activities ... </span>
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-8">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
      <div class="card-header">
        <h4 class="card-title">
          <span class="card-label font-weight-bolder text-dark"> {{ trans('default.label.graphs') }} </span>
        </h4>
        <div class="card-toolbar">
          <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
          <div class="collapse" id="toolbar_delete"><a data-url="" class="delete-all btn btn-sm btn-icon btn-clean btn-icon-md" data-toggle="tooltip" title="{{ trans('default.label.delete-selected') }}"><i class="text-danger fas fa-trash"></i></a></div>
        </div>
      </div>
      <div class="card-body">
        <div id="charts"></div>
      </div>
    </div>
  </div>
</div>
@endpush

@push('js')
<script src="/assets/backend/plugins/custom/datatables/datatables.bundle.js?v=7.0.6"></script>
<script src="/assets/backend/js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.0.5"></script>
<script>
$(document).ready(function() {
  $('#toast-container').fadeOut(5000);
});
"use strict";
var KTDatatablesExtensionsKeytable = function() {
  var initTable2 = function() {
    var table = $('#exilednoname').DataTable({
      processing: true,
      "language": {
        processing: '<span class="font-weight-bolder text-center"> Please Wait ... </span>'
      },
      serverSide: true,
      searching: true,
      rowId: 'Collocation',
      select: {
        style: 'multi',
        selector: 'td:first-child .checkable',
      },
      ajax: {
        url: "{{ URL::current() }}",
        "data" : function (d) {
          d.filter_active = $('.filter_active').val();
          @if ( !empty($daterange) && $daterange == 'true')
          d.date_start = $('#date_start').val();
          d.date_end = $('#date_end').val();
          @endif
          @stack('filter-function')
        }
      },
      headerCallback: function(thead, data, start, end, display) {
        thead.getElementsByTagName('th')[0].innerHTML = `
        <label class="checkbox checkbox-single checkbox-solid checkbox-primary mb-0">
        <input type="checkbox" value="" class="group-checkable"/>
        <span></span>
        </label>`;
      },
      "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
      buttons: [
        { extend: 'print', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
        { extend: 'copyHtml5', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
        { extend: 'excelHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
        { extend: 'csvHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
        { extend: 'pdfHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
        { extend: 'pdfHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
        { extend: 'excelHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
        { extend: 'copyHtml5', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
        { extend: 'print', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
      ],
      columns: [
        {
          data: 'checkbox', orderable: false, orderable: false, searchable: false, 'width': '1',
          render : function ( data, type, row, meta) { return '<label class="checkbox checkbox-single checkbox-primary mb-0"><input type="checkbox" data-id="' + row.id + '" class="checkable"><span></span></label>'; },
        },
        {
          data: 'autonumber', orderable: false, orderable: false, searchable: false, 'width': '1',
          render: function (data, type, row, meta) {
            return meta.row + meta.settings._iDisplayStart + 1;
          }
        },
        @if ( !empty($status) && $status == 'true')
        {
          data: 'status', orderable: true, 'className': 'align-middle', 'width': '1',
          render: function ( data, type, row ) {
            if ( data == 1 ) { return '<a href="javascript:void(0);" id="status_pending" data-toggle="tooltip" data-original-title="Success" data-id="' + row.id + '"><span class="label label-outline-success label-pill label-inline"> {{ trans("default.label.success") }} </span></a>'; }
            if ( data == 2 ) { return '<a href="javascript:void(0);" id="status_done" data-toggle="tooltip" data-original-title="Pending" data-id="' + row.id + '"><span class="label label-outline-warning label-pill label-inline"> {{ trans("default.label.pending") }} </span></a>'; }
            if ( data == 3 ) { return '<a href="javascript:void(0);" data-toggle="tooltip" data-original-title="Delivered" data-id="' + row.id + '"><span class="label label-outline-primary label-pill label-inline"> {{ trans("default.label.delivered") }} </span></a>'; }
            if ( data == 4 ) { return '<a href="javascript:void(0);" data-toggle="tooltip" data-original-title="Canceled" data-id="' + row.id + '"><span class="label label-outline-danger label-pill label-inline"> {{ trans("default.label.canceled") }} </span></a>'; }
          }
        },
        @endif
        @if ( !empty($daterange) && $daterange == 'true')
        {
          data: 'date_start', orderable: true, 'className': 'align-middle text-nowrap', 'width': '1',
          render: function ( data, type, row ) { return data; }
        },
        {
          data: 'date_end', orderable: true, 'className': 'align-middle text-nowrap', 'width': '1',
          render: function ( data, type, row ) { return data; }
        },
        @endif
        @stack('table-body')
        {
          data: 'active', orderable: true, 'className': 'align-middle text-center', 'width': '1',
          render: function ( data, type, row ) {
            if ( data == 0 ) { return '<a href="javascript:void(0);" id="active" data-toggle="tooltip" data-original-title="Enable" data-id="' + row.id + '"><span class="label label-dark label-inline"> {{ trans("default.label.no") }} </span></a>'; }
            if ( data == 1 ) { return '<a href="javascript:void(0);" id="inactive" data-toggle="tooltip" data-original-title="Disable" data-id="' + row.id + '"><span class="label label-info label-inline"> {{ trans("default.label.yes") }} </span></a>'; }
          }
        },
        {
          data: 'action', orderable: false, orderable: false, searchable: false, 'width': '1',
          render : function ( data, type, row) {
            return ''+
            '<div class="dropdown dropdown-inline">'+
            '<button type="button" class="btn btn-hover-light-dark btn-icon btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ki ki-bold-more-ver"></i></button>'+
            '<div class="dropdown-menu dropdown-menu-xs" style=""><ul class="navi navi-hover py-5">'+
            '<li class="navi-item"><a href="{{ URL::current() }}/' + row.id + '" class="navi-link"><span class="navi-icon"><i class="flaticon2-expand"></i></span><span class="navi-text">{{ trans("default.label.view") }}</span></a></li>'+
            '<li class="navi-item"><a href="{{ URL::current() }}/' + row.id + '/edit" class="navi-link"><span class="navi-icon"><i class="flaticon2-contract"></i></span><span class="navi-text">{{ trans("default.label.edit") }}</span></a></li>'+
            '<li class="navi-item"><a href="javascript:void(0);" class="navi-link delete" data-id="' + row.id + '"><span class="navi-icon"><i class="flaticon2-trash"></i></span><span class="navi-text"> {{ trans("default.label.delete") }} </span></a></li>';
          },
        },
      ],
      order: [[1, 'asc']]
    });

    // FILTER DATA
    $('.filter-active').change(function () {
      table.column(-2).search( $(this).val() ).draw();
    });

    @if ( !empty($status) && $status == 'true')
    $('.filter-status').change(function () {
      table.column(2)
      .search( $(this).val() )
      .draw();
    });
    @endif

    @if ( !empty($daterange) && $daterange == 'true')
    $('#date_start').change(function () { table.draw(); });
    $('#date_end').change(function () { table.draw(); });
    @endif

    @stack('filter-data')
    // END FILTER DATA

    $("#table-refresh").on("click", function() {
      $('#toolbar_delete').collapse('hide');
      $('.filter-form').val('');
      table.search( '' ).columns().search( '' ).draw();
      table.ajax.reload();
    });

    $('#export_copy').on('click', function(e) { e.preventDefault(); table.button(1).trigger(); });
    $('#export_excel').on('click', function(e) { e.preventDefault(); table.button(2).trigger(); });
    $('#export_pdf').on('click', function(e) { e.preventDefault(); table.button(4).trigger(); });
    $('#export_csv').on('click', function(e) { e.preventDefault(); table.button(3).trigger(); });
    $('#export_print').on('click', function(e) { e.preventDefault(); table.button(0).trigger(); });

    table.on('change', '.group-checkable', function() {
      var set = $(this).closest('table').find('td:first-child .checkable');
      var checked = $(this).is(':checked');
      $(set).each(function() {
        if (checked) {
          $(this).prop('checked', true);
          table.rows($(this).closest('tr')).select();
          var checkedNodes = table.rows('.selected').nodes();
          var count = checkedNodes.length;
          $('#kt_datatable_selected_records').html(count);
          if (count > 0) { $('#toolbar_delete').collapse('show'); }
        }
        else {
          $(this).prop('checked', false);
          table.rows($(this).closest('tr')).deselect();
          $('#toolbar_delete').collapse('hide');
        }
      });
    });

    table.on('change', '.checkable', function() {
      var checkedNodes = table.rows('.selected').nodes();
      var count = checkedNodes.length;
      $('#kt_datatable_selected_records').html(count);
      if (count > 0) { $('#toolbar_delete').collapse('show'); }
      else { $('#toolbar_delete').collapse('hide'); }
    });

    $('body').on('click', '#active', function () {
      var id = $(this).data("id");
      $.ajax({
        type: "get", url: "{{ URL::current() }}/active/"+id, processing: true, serverSide: true,
        success: function (data) {
          var oTable = $('#exilednoname').dataTable();
          $('#toolbar_delete').collapse('hide');
          oTable.fnDraw(false);
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.success("{{ trans('default.notification.success.active') }}");
        },
        error: function (data) {
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.error("{{ trans('default.notification.error.restrict') }}!");
        }
      });
    });

    $('body').on('click', '#inactive', function () {
      var id = $(this).data("id");
      $.ajax({
        type: "get", url: "{{ URL::current() }}/inactive/"+id, processing: true, serverSide: true,
        success: function (data) {
          var oTable = $('#exilednoname').dataTable();
          $('#toolbar_delete').collapse('hide');
          oTable.fnDraw(false);
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.success("{{ trans('default.notification.success.inactive') }}");
        },
        error: function (data) {
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.error("{{ trans('default.notification.error.restrict') }}!");
        }
      });
    });

    $('.delete-all').on('click', function(e) {
      var exilednonameArr = [];
      $(".checkable:checked").each(function() { exilednonameArr.push($(this).attr('data-id')); });
      var strEXILEDNONAME = exilednonameArr.join(",");
      Swal.fire({ title: "Are you sure?", text: "{{ trans('default.label.confirm-delete-selected') }}", icon: "warning", showCancelButton: true, confirmButtonText: "Yes", cancelButtonText: "No", reverseButtons: false}).then(function(result) {
        if (result.value) {
          $.ajax({
            url: "{{ URL::current() }}/deleteall", type: 'get', headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, data: 'EXILEDNONAME='+strEXILEDNONAME,
            success: function (data) {
              var oTable = $('#exilednoname').dataTable();
              $('#toolbar_delete').collapse('hide');
              oTable.fnDraw(false);
              toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
              toastr.success("{{ trans('default.notification.success.delete-selected') }}");
            },
            error: function (data) {
              toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
              toastr.error("{{ trans('default.notification.error.restrict') }}!");
            }
          });
        }
      });
    });

    $('body').on('click', '.delete', function () {
      var id = $(this).data("id");
      Swal.fire({ title: "Are you sure?", text: "{{ trans('default.label.confirm-delete') }}", icon: "warning", showCancelButton: true, confirmButtonText: "Yes", cancelButtonText: "No", reverseButtons: false }).then(function(result) {
        if (result.value) {
          $.ajax({
            type: "get", url: "{{ URL::current() }}/delete/"+id,
            success: function (data) {
              var oTable = $('#exilednoname').dataTable();
              oTable.fnDraw(false);
              toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
              toastr.success("{{ trans('default.notification.success.delete') }}");
            },
            error: function (data) {
              toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
              toastr.error("{{ trans('default.notification.error.restrict') }}!");
            }
          });
        }
      });
    });

    $('body').on('click', '#delete', function () {
      var id = $(this).data("id");
      if(confirm("Are You sure want to delete !")){}
    });

  };

  return { init: function() { initTable2(); }, };
}();

jQuery(document).ready(function() { KTDatatablesExtensionsKeytable.init(); });
</script>

<script>
"use strict";
// Shared Colors Definition
const primary = '#6993FF';
const success = '#1BC5BD';
const info = '#8950FC';
const warning = '#FFA800';
const danger = '#F64E60';
// Class definition
function generateBubbleData(baseval, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;
    series.push([x, y, z]);
    baseval += 86400000;
    i++;
  }
  return series;
}
function generateData(count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = 'w' + (i + 1).toString();
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    series.push({
      x: x,
      y: y
    });
    i++;
  }
  return series;
}
var KTApexChartsDemo = function () {
  // Private functions
  var _demo1 = function () {
    const apexChart = "#charts";
    var created = [{{ chart_created($model) }}];
    var updated = [{{ chart_updated($model) }}];
    var deleted = [{{ chart_deleted($model) }}];
    var options = {
      series: [
        { name: 'Created', data: created },
        { name: 'Updated', data: updated },
        { name: 'Deleted', data: deleted },
      ],
      chart: {
        height: 350,
        type: 'line',
        zoom: {
          enabled: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'straight'
      },
      grid: {
        row: {
          colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
          opacity: 0.5
        },
      },
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      },
      colors: [success, warning, danger]
    };
    var chart = new ApexCharts(document.querySelector(apexChart), options);
    chart.render();
  }
  return {
    init: function () {
      _demo1();
    }
  };
}();
jQuery(document).ready(function () {
  KTApexChartsDemo.init();
});
</script>
@endpush
