
@extends('pages.frontend.layouts.default')

@push('section')
@include('pages.frontend.section.index.slider')
@include('pages.frontend.section.index.product')
@include('pages.frontend.section.index.video')
@include('pages.frontend.section.index.banner-1')

@foreach($product as $product)
<div class="modal fade" id="modalAds{{ $product->id }}" role="dialog" style="display: none;">
  <div class="modal-dialog  modal-bg-1">
    <div class="modal-body-content">
      <div class="modal-body">
        <img src="/files/photo/product/{{ $product->photo }}" width="100%"></img>
      </div>
    </div>
  </div>
</div>
@endforeach
@endpush

@push('maps')
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.02477537144!2d107.56346771397142!3d-6.887635695022948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5bfea9d3087%3A0x19695232076f3674!2sSC%20STICKER%20CUTTING%20BANDUNG!5e0!3m2!1sen!2sid!4v1663483395586!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endpush
