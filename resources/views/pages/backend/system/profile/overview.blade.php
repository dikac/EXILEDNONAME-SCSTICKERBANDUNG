@extends('pages.backend.system.profile.layout')

@push('card-title')
<h3 class="card-label font-weight-bolder text-dark"> Overview Information </h3>
<span class="text-muted font-weight-bold font-size-sm mt-1">Change your account settings</span>
@endpush

@push('card-body')
<form method="POST" action="{{ URL::current() }}/../update-overview/{{ $data->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
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
        <td width="150px"> Avatar </td>
        <td width="10px"> : </td>
        <td>
          <div class="image-input image-input-outline" id="kt_image_4" style="background-image: url(/assets/backend/media/users/blank.png)">
            <div class="image-input-wrapper" style="background-image: url({{ isset(Auth::User()->profile_avatar) ? '/profile_avatar/user/' . Auth::User()->id . '/' . Auth::User()->profile_avatar : '/assets/backend/media/users/blank.png' }})"></div>

            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
              <i class="fa fa-pen icon-sm text-muted"></i>
              <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
              <input type="hidden" name="profile_avatar_remove"/>
            </label>

            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
              <i class="ki ki-bold-close icon-xs text-muted"></i>
            </span>

            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
              <i class="ki ki-bold-close icon-xs text-muted"></i>
            </span>
          </div>
        </td>
      </tr>
      <tr>
        <td> Username </td>
        <td> : </td>
        <td> <input type="text" name="username" class="form-control form-control-sm form-control-solid" value="administrator" readonly></td>
      </tr>
      <tr>
        <td> Email </td>
        <td> : </td>
        <td> <input type="text" name="email" class="form-control form-control-sm form-control-solid" value="{{ Auth::User()->email }}" readonly></td>
      </tr>
      <tr>
        <td> Phone </td>
        <td> : </td>
        <td> <input type="text" name="phone" class="form-control form-control-sm form-control-solid" value="{{ Auth::User()->phone }}" readonly></td>
      </tr>
      <tr>
        <td> Name </td>
        <td> : </td>
        <td> <input type="text" name="name" class="form-control form-control-sm" value="{{ Auth::User()->name }}"></td>
      </tr>
      <tr>
        <td> Address 1 </td>
        <td> : </td>
        <td> <input type="text" class="form-control form-control-sm form-control-solid" value="{{ Auth::User()->address_1 }}" placeholder=""></td>
      </tr>
      <tr>
        <td> Address 2 </td>
        <td> : </td>
        <td> <input type="text" class="form-control form-control-sm form-control-solid" value="{{ Auth::User()->address_1 }}" placeholder=""></td>
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
@endpush
