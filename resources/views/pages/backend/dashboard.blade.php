@extends('layouts.default', ['page' => 'dashboard'])
@push('title', 'Dashboard')

@push('content')
<div class="alert alert-custom alert-outline-1x alert-primary fade show" role="alert">
  <div class="alert-icon"><i class="flaticon-warning"></i></div>
  <div class="alert-text">
    Hi, <b> {{ Auth::User()->name }} </b><br>
    {{ trans('default.label.notice-welcome') }}
  </div>
  <div class="alert-close">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true"><i class="ki ki-close"></i></span>
    </button>
  </div>
</div>
@endpush
