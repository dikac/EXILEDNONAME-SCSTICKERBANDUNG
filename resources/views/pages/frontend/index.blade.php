<!DOCTYPE html>
<html lang="en">
@include('pages.frontend.includes.head')

<body>
  @include('pages.frontend.includes.header')

  <main>
    @include('pages.frontend.includes.slider')
    <div class="container margin_60_40">
      @include('pages.frontend.includes.banner')
      @include('pages.frontend.includes.populars')

      <hr>
      <!-- @!include('pages.frontend.includes.topics') -->
      @include('pages.frontend.includes.maps')
    </div>
  </main>

  @include('pages.frontend.includes.footer')

  <div id="toTop"></div>
  <div class="layer"></div>

  @include('pages.frontend.includes.js')

</body>
</html>
