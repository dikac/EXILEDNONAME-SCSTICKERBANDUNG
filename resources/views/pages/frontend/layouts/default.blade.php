<!DOCTYPE html>
<html>
@include('pages.frontend.includes.head')
<body>

  <div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    @include('pages.frontend.includes.navbar-top')
    @include('pages.frontend.includes.navbar-header')
  </div>

  @stack('section')


    <!-- @!include('pages.frontend.section.ads') -->
    <!-- @!include('pages.frontend.section.brand') -->
    @stack('container')
  

  <!-- @!include('pages.frontend.section.banner-2') -->

  <br>

  @stack('maps')

  @include('pages.frontend.includes.footer')
  @include('pages.frontend.includes.js')

  <!-- render the button and direct it to wa.me -->
  <a href="https://api.whatsapp.com/send?phone={{ $setting->phone }}" class="floating" target="_blank">
    <i class="fab fa-whatsapp fab-icon"></i>
  </a>

</body>
</html>
