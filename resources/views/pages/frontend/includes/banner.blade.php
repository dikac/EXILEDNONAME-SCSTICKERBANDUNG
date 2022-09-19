@foreach($banner as $banner)
<div class="row">
  <div class="col-lg-12">
    <div class="banner lazy" data-bg="url(/files/photo/banner/{{ $banner->photo }})">
      <div class="align-items-center opacity-mask justify-content-center text-center" data-opacity-mask="rgba(0, 0, 0, 0.9)">
        <div>
          <br><br>
          <h3 style="color: #ffffff"> {!! $banner->name !!} </h3>
          <p><small style="color: #ffffff"> {!! $banner->description !!} </small></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
