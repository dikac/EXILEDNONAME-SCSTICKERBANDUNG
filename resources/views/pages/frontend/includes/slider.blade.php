<div id="carousel-home">
  <div class="owl-carousel owl-theme">

    @foreach($slider as $slider)
    <div class="owl-slide cover" style="background-image: url(/files/photo/slider/{{ $slider->photo }});">
      <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
          <div class="row justify-content-center justify-content-md-end">
            <div class="col-lg-6 static">
              <div class="slide-text text-center white">
                <h2 class="owl-slide-animated owl-slide-title"> {{ $slider->name }} </h2>
                <p class="owl-slide-animated owl-slide-subtitle"> {{ $slider->description }} </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
  <div id="icon_drag_mobile"></div>
</div>
