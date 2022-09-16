<div class="dropdown">
  <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
      <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"> Login </span>
      <div class="symbol symbol-circle symbol-35">
        <img alt="Pic" src="{{ isset(Auth::User()->profile_avatar) ? '/profile_avatar/user/' . Auth::User()->id . '/' . Auth::User()->profile_avatar : '/assets/backend/media/users/blank.png' }}">
      </div>
    </div>
  </div>
</div>
