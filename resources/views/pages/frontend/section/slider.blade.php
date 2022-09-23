<div class="banner">
  <div class="full-container">
    <div class="slider-content">
      <ul id="pager" class="container"></ul>
      <div class="slider slider-v2">

        @foreach($slider as $slider)
        <div class="slider-item slider-item-img2 parallax" data-cycle-pager-template="<a href=#> {{ $slider->name }} </a>">
          <div class="sliderInfo">
            <div class="container">
              <div class="col-lg-5 col-md-5 col-sm-5 pull-left sliderText dark alpha80 hidden-xs">
                <div class="inner">
                  <h1> {{ $slider->name }} </h1>
                  <p class="hidden-xs">
                    {{ $slider->description }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <img alt="img" src="/files/photo/slider/{{ $slider->photo }}" class="img-responsive parallaximg sliderImg" width="100%">
        </div>
        @endforeach

      </div>
    </div>
  </div>
</div>
