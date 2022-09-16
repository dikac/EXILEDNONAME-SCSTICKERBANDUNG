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
        <li class="menu-item {{ (request()->is('/')) ? 'menu-item-active' : '' }}"><a href="/" class="menu-link"><i class="menu-icon fas fa-desktop"></i><span class="menu-text"> Home </span></a></li>
        <li class="menu-item {{ (request()->is('help')) ? 'menu-item-active' : '' }}"><a href="/help" class="menu-link"><i class="menu-icon fas fa-book-open"></i><span class="menu-text"> Help </span></a></li>
      </ul>
    </div>
  </div>
</div>
