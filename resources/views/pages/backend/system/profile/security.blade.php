@extends('pages.backend.system.profile.layout')

@push('card-title')
<h3 class="card-label font-weight-bolder text-dark"> Security </h3>
<span class="text-muted font-weight-bold font-size-sm mt-1"> Change your password settings</span>
@endpush

@push('card-body')
<form id="form-exilednoname" method="POST" action="{{ URL::current() }}/../update-password" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}

  @if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert"> {{ $message }} </div><hr>
  @endif

  @if ($message = Session::get('error'))
  <div class="alert alert-danger" role="alert"> {{ $message }} </div><hr>
  @endif

  <table width="100%">
    <tr height="50px">
      <td width="150px"> Current Password </td>
      <td width="10px"> : </td>
      <td><input id="current-password" type="password" class="{{ $errors->has('current-password') ? 'form-control is-invalid' : 'form-control' }}" name="current-password" required></td>
    </tr>
    <tr height="50px">
      <td> New Password </td>
      <td> : </td>
      <td><input id="new-password" type="password" class="{{ $errors->has('new-password') ? 'form-control is-invalid' : 'form-control' }}" name="new-password" required></td>
    </tr>
    <tr height="50px">
      <td> Confirm Password </td>
      <td> : </td>
      <td><input id="confirm-password" type="password" class="{{ $errors->has('confirm-password') ? 'form-control is-invalid' : 'form-control' }}" name="confirm-password" required></td>
    </tr>
    <tr height="50px">
      <td></td>
      <td></td>
      <td><button type="submit" class="btn btn-success">Save Changes</button></td>
    </tr>
  </table>
</form>
@endpush
