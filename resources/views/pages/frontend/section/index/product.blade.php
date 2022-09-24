<div class="container main-container">

  <div class="row featuredPostContainer globalPadding style2">
    <h3 class="section-title style2 text-center">
      <span> PRODUK TERLARIS DI TOKO KAMI </span>
    </h3>

    <div id="productslider" class="owl-carousel owl-theme">

      @foreach($product as $product)
      <div class="item">
        <div class="product">
          <div class="image">
            <div class="quickview">
              <a data-toggle="modal" class="btn btn-xs btn-quickview" href="#" data-target="#modalAds{{ $product->id }}">Quick View </a>
            </div>
            <a href="product-details.html"><img src="/files/photo/product/{{ $product->photo }}" alt="img"></a>
            <div class="promotion"><span class="new-product">  ⭐ POPULAR </span></div>
          </div>
          <div class="description">
            <h4><a href="product-details.html"> {{ $product->name }} </a><hr></h4>
            <p>
              <b> -- Description -- </b><br>
              {{ $product->description }}
            </p>
          </div>
          <div class="action-control">
            
            <a href="https://api.whatsapp.com/send?phone=%20{{ $setting->phone }}&text=Pesan ini tersambung otomatis dari produk di website, Saya Ingin Menanyakan/Membeli Item ini: %0A({{ $product->name }} - {{ $product->description }})%0ATerima%20Kasih%20--" target="_blank" class="btn btn-warning">
              <span class="add2cart">
                <i class="glyphicon glyphicon-shopping-cart"></i> READY </span>
              </a>
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <hr>
      <center><a href="#" class="btn btn-inverse"> Lihat Semua Produk </a></center>
      <hr>

    </div>
  </div>
