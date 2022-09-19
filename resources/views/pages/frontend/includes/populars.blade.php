<div class="main_title">
  <span><em></em></span>
  <h2> Popular Products </h2>
  <p> Produk Terlaris Di Toko Kami </p>
  <a href="/products"> View All </a>
</div>

<div class="owl-carousel owl-theme carousel_4">
  @foreach($product as $product)
  <div class="item">
    <div class="strip">
      <figure>
        <span class="ribbon off"> Ready Stock </span>
        <img src="/assets/frontend/img/lazy-placeholder.png" data-src="/files/photo/product/{{ $product->photo }}" class="owl-lazy" alt="">
        <div class="pictures magnific-gallery clearfix">
          <a href="/files/photo/product/{{ $product->photo }}" class="strip_info" title="{{ $product->name }}" data-effect="mfp-zoom-in">
            <small> ⭐ Popular </small>
            <div class="item_title">
              <small> {{ $product->name }} </small>
            </div>
          </a>
        </div>
      </figure>
    </div>
  </div>
  @endforeach
</div>
