@extends('layouts.default')
@push('title', 'Settings')

@push('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card card-custom gutter-b card-sticky" data-card="true" id="kt_page_sticky_card">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label"> Generals</h3>
        </div>
        <div class="card-toolbar">
          <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle">
            <i class="fas fa-caret-down"></i>
          </a>
        </div>
      </div>

      <div class="card-body" style="">

        <form method="POST" action="{{ URL::current() }}/../settings/update/1" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}

          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert"> {{ $message }} </div><hr>
          @endif

          @if ($message = Session::get('error'))
          <div class="alert alert-danger" role="alert"> {{ $message }} </div><hr>
          @endif

          <div class="table-responsive">
            <table width="100%" style="border-collapse:separate; border-spacing:10px">
              <tr>
                <td> Name </td>
                <td> : </td>
                <td> <input type="text" name="name" class="form-control form-control-sm" value="{{ $data->name }}"></td>
              </tr>
              <tr>
                <td> Address </td>
                <td> : </td>
                <td> <input type="text" name="address" class="form-control form-control-sm" value="{{ $data->address }}"></td>
              </tr>
              <tr>
                <td> Description </td>
                <td> : </td>
                <td> <input type="text" name="description" class="form-control form-control-sm" value="{{ $data->description }}"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-success">
                    <span class="font-weight-bolder text-right"> Save Changes </span>
                  </button>
                </td>
              </tr>
            </table>
          </div>
        </form>

      </div>


    </div>
  </div>
</div>
@endpush
