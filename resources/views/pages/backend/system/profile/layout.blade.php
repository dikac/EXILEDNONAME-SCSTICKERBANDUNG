@extends('layouts.default', ['page' => 'profile'])
@push('title', 'Profile')

@push('content')
<div class="d-flex flex-row">
  <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
    <div class="card card-custom card-stretch">
      <div class="card-body pt-4">

        <hr>

        <center>
          <div class="symbol symbol-circle symbol-50 mr-3">
            <img alt="Pic" src="{{ isset(Auth::User()->profile_avatar) ? '/profile_avatar/user/' . Auth::User()->id . '/' . Auth::User()->profile_avatar : '/assets/backend/media/users/blank.png' }}">
          </div>
          <br>
          <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary"> {{ Auth::User()->name }} </a>
          <div class="text-muted"> {{ Auth::User()->accesses->name }} </div>
        </center>

        <hr>

        <ul class="nav flex-column nav-pills">
          <li class="nav-item mb-2 text-center"><a href="{{ URL::Current() }}/../overview" class="nav-link active" href="#home-5"><span class="nav-text"> Overview </span></a></li>
          <li class="nav-item mb-2 text-center"><a href="{{ URL::Current() }}/../security" class="nav-link active" aria-controls="profile"><span class="nav-text"> Security </span></a></li>
        </ul>

      </div>
    </div>
  </div>

  <div class="flex-row-fluid ml-lg-8">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
      <div class="card-header py-3">
        <div class="card-title align-items-start flex-column">
          @stack('card-title')
        </div>
        <div class="card-toolbar">
          <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle">
            <i class="fas fa-caret-down"></i>
          </a>
        </div>
      </div>

      <div class="card-body">
      @stack('card-body')
    </div>
    </div>
  </div>

</div>

@endpush

@push('js')
<script src="/assets/backend/js/pages/custom/profile/profile.js?v=7.0.6"></script>
<script src="/assets/backend/js/pages/crud/file-upload/image-input.js?v=7.0.6"></script>
@endpush
