<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">

  <div class="brand flex-column-auto " id="kt_brand">
    <a href="/dashboard" class="brand-logo text-white align-center">
      <h5>
        @php $settings = \DB::table('settings')->select('*')->first(); @endphp
        {{ $settings->name }}
      </h5>
    </a>
  </div>

  <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
      <ul class="menu-nav">

        <li class="menu-item {{ (request()->is('dashboard')) ? 'menu-item-active' : '' }}"><a href="/dashboard" class="menu-link"><i class="menu-icon fas fa-desktop"></i><span class="menu-text"> Dashboard </span></a></li>
        <!-- <li class="menu-item {{ (request()->is('dashboard/messages')) ? 'menu-item-active' : '' }}"><a href="/dashboard/messages" class="menu-link"><i class="menu-icon fas fa-inbox"></i><span class="menu-text"> Messages </span></a></li> -->

        @include('pages.backend.includes.sidebar-item')

        <!-- EXTENSIONS -->
        <li class="menu-section">
          <h4 class="menu-text"> EXTENSIONS </h4>
          <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
        </li>
        <li class="menu-item {{ (request()->is('dashboard/file-manager')) ? 'menu-item-active' : '' }}"><a href="/dashboard/file-manager" class="menu-link"><i class="menu-icon fas fa-hdd"></i><span class="menu-text"> File Manager </span></a></li>
        <li class="menu-item {{ (request()->is('dashboard/statistics*')) ? 'menu-item-active' : '' }}"><a href="/dashboard/statistics" class="menu-link"><i class="menu-icon fas fa-bug"></i><span class="menu-text"> Statistics </span></a></li>

        <!-- ADMINISTRATIVE -->
        <li class="menu-section">
          <h4 class="menu-text"> ADMINISTRATIVE </h4>
          <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
        </li>
        <li class="menu-item {{ (request()->is('dashboard/help*')) ? 'menu-item-active' : '' }}"><a href="/dashboard/help" class="menu-link"><i class="menu-icon fas fa-book"></i><span class="menu-text"> Help </span></a></li>
        <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/managements*')) ? 'menu-item-open' : '' }}">
          <a href="javascript:;" class="menu-link menu-toggle">
            <i class="menu-icon fas fa-users-cog"></i>
            <span class="menu-text"> Managements </span><i class="menu-arrow"></i>
          </a>
          <div class="menu-submenu">
            <i class="menu-arrow"></i>
            <ul class="menu-subnav">
              <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/managements/accesses*')) ? 'menu-item-active' : '' }}"><a href="/dashboard/managements/accesses" class="menu-link"><span class="menu-text"><i class="menu-bullet menu-bullet-line"><span></span></i> Accesses </span></a></li>
              <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/managements/users*')) ? 'menu-item-active' : '' }}"><a href="/dashboard/managements/users" class="menu-link"><span class="menu-text"><i class="menu-bullet menu-bullet-line"><span></span></i> Users </span></a></li>
            </ul>
          </div>
        </li>
        <li class="menu-item {{ (request()->is('dashboard/settings*')) ? 'menu-item-active' : '' }}"><a href="/dashboard/settings" class="menu-link"><i class="menu-icon fas fa-cogs"></i><span class="menu-text"> Settings </span></a></li>

        <li class="menu-section">
          <h4 class="menu-text"> SETTINGS </h4>
          <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
        </li>
        <li class="menu-item {{ (request()->is('dashboard/profile*')) ? 'menu-item-active' : '' }}"><a href="/dashboard/profile" class="menu-link"><i class="menu-icon fas fa-user-alt"></i><span class="menu-text"> Profile </span></a></li>
        <li class="menu-item">
          <a class="menu-link" id="logout">
            <i class="menu-icon fas fa-sign-out-alt"></i>
            <span class="menu-text"> Logout </span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>
