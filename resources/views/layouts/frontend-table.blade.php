<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('pages.backend.includes.head')
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <a href="/dashboard" class="text-white">
      <h4>
        @php $settings = \DB::table('settings')->select('*')->first(); @endphp
        {{ $settings->name }}
      </h4>
    </a>
    @include('pages.backend.includes.mobile-toolbar')
  </div>

  <div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
      @include('pages.frontend.includes.sidebar')
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div id="kt_header" class="header header-fixed">
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
              <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default">
                <ul class="menu-nav ">
                  <li class="menu-item menu-item-submenu"  data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                      <span class="menu-text"> ONLINE </span>
                      <i class="menu-arrow"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="topbar">
              <!-- @!include('pages.backend.includes.topbar-right-search') -->
              <!-- @!include('pages.backend.includes.topbar-right-notification') -->
              <!-- @!include('pages.backend.includes.topbar-right-quickaction') -->
              <!-- @!include('pages.backend.includes.topbar-right-cart') -->
              <!-- @!include('pages.backend.includes.topbar-right-quickpanel') -->
              <!-- @!include('pages.backend.includes.topbar-right-chat') -->
              @include('pages.backend.includes.topbar-right-language')
              @include('pages.frontend.includes.topbar-right-user')
            </div>
          </div>
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          @include('pages.frontend.includes.subheader')
          <div class="d-flex flex-column-fluid">
            <div class="container">
              @stack('content')
            </div>
          </div>
        </div>

        @include('pages.backend.includes.footer')
      </div>
    </div>
  </div>

  @include('pages.frontend.includes.sticky-toolbar')
  @include('pages.backend.includes.scroll-top')
  @include('pages.backend.includes.js')

</body>
</html>
