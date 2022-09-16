<ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
  <li class="nav-item mb-2" data-toggle="tooltip" title="Whatsapp" data-placement="left"><a href="https://api.whatsapp.com/send?phone={{ env('APP_PHONE') }}&text=Hello, Saya Chat Melalui Application Dashboard" target="_blank" class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success"><i class="fab fa-whatsapp"></i></a></li>
  <li class="nav-item mb-2" data-toggle="tooltip" title="Application Version : {{ env('APP_VERSION') }}" data-placement="left"><a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning"><i class="fas fa-exclamation-triangle"></i></a></li>
  <!-- <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right"><a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#"><i class="flaticon2-drop"></i></a></li> -->
</ul>
