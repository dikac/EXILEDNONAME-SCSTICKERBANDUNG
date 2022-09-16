@extends('layouts.frontend-table', ['page' => 'help'])
@push('title', 'Help')

@push('content')
<div class="d-flex flex-row-fluid bgi-size-cover bgi-position-top" style="background-image: url('/assets/backend/media/bg/bg-9.jpg')">
  <div class=" container ">
    <div class="d-flex justify-content-between align-items-center pt-25 pb-35">
      <h3 class="font-weight-bolder text-dark mb-0">
        Frequently Asked Questions
      </h3>
      <div class="d-flex">
        <a href="#" class="font-size-h4 font-weight-bold">Help Center</a>
      </div>
    </div>
  </div>
</div>

<div class=" container  mt-n15">
  <div class="card mb-8">
    <div class="card-body p-10">
      <div class="row">
        <div class="col-lg-3">
          <ul class="navi navi-link-rounded navi-accent navi-hover navi-active nav flex-column mb-8 mb-lg-0" role="tablist">
            <li class="navi-item mb-2">
              <a class="navi-link" data-toggle="tab" href="#" >
                <span class="navi-text text-dark-50 font-size-h5 font-weight-bold">Buying</span>
              </a>
            </li>

            <li class="navi-item mb-2">
              <a class="navi-link active" data-toggle="tab" href="#" >
                <span class="navi-text text-dark font-size-h5 font-weight-bold">Product Support</span>
              </a>
            </li>
            <!--end::Nav Item-->

            <!--begin::Nav Item-->
            <li class="navi-item mb-2">
              <a class="navi-link" data-toggle="tab" href="#" >
                <span class="navi-text text-dark-50 font-size-h5 font-weight-bold">Account Management</span>
              </a>
            </li>
            <!--end::Nav Item-->

            <!--begin::Nav Item-->
            <li class="navi-item mb-2">
              <a class="navi-link" data-toggle="tab" href="#" >
                <span class="navi-text text-dark-50 font-size-h5 font-weight-bold">Product Licenses</span>
              </a>
            </li>
            <!--end::Nav Item-->

            <!--begin::Nav Item-->
            <li class="navi-item mb-2">
              <a class="navi-link" data-toggle="tab" href="#" >
                <span class="navi-text text-dark-50 font-size-h5 font-weight-bold">Base Installation</span>
              </a>
            </li>
            <!--end::Nav Item-->

            <!--begin::Nav Item-->
            <li class="navi-item mb-2">
              <a class="navi-link" data-toggle="tab" href="#" >
                <span class="navi-text text-dark-50 font-size-h5 font-weight-bold">Project Management</span>
              </a>
            </li>
            <!--end::Nav Item-->

            <!--begin::Nav Item-->
            <li class="navi-item mb-2">
              <a class="navi-link" data-toggle="tab" href="#" >
                <span class="navi-text text-dark-50 font-size-h5 font-weight-bold">Member Roles</span>
              </a>
            </li>
            <!--end::Nav Item-->

            <!--begin::Nav Item-->
            <li class="navi-item mb-2">
              <a class="navi-link" data-toggle="tab" href="#" >
                <span class="navi-text text-dark-50 font-size-h5 font-weight-bold">Report Generation</span>
              </a>
            </li>
            <!--end::Nav Item-->

            <!--begin::Nav Item-->
            <li class="navi-item mb-2">
              <a class="navi-link" data-toggle="tab" href="#" >
                <span class="navi-text text-dark-50 font-size-h5 font-weight-bold">Downloads</span>
              </a>
            </li>
            <!--end::Nav Item-->
          </ul>
          <!--end::Navigation-->
        </div>

        <div class="col-lg-9">
          <!--begin::Tab Content-->
          <div class="tab-content">
            <!--begin::Accordion-->
            <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="faq">
              <!--begin::Item-->
              <div class="card">
                <div class="card-header" id="faqHeading1">
                  <a class="card-title text-dark" data-toggle="collapse" href="#faq1" aria-expanded="true" aria-controls="faq1"  role="button">
                    <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                      </g>
                    </svg><!--end::Svg Icon--></span>                                        <div class="card-label text-dark pl-4">How does it work?</div>
                  </a>
                </div>
                <div id="faq1" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faq">
                  <div class="card-body text-dark-50 font-size-lg pl-12">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <!--end::Item-->

              <!--begin::Item-->
              <div class="card border-top-0">
                <!--begin::Header-->
                <div class="card-header" id="faqHeading2">
                  <a class="card-title collapsed text-dark" data-toggle="collapse" href="#faq2" aria-expanded="false" aria-controls="faq2" role="button">
                    <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                      </g>
                    </svg><!--end::Svg Icon--></span>                                        <div class="card-label text-dark pl-4">Do I need a designer to use Metronic?</div>
                  </a>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="faq2" class="collapse" aria-labelledby="faqHeading2" data-parent="#faq">
                  <div class="card-body text-dark-50 font-size-lg pl-12">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                <!--end::Body-->
              </div>
              <!--end::Item-->

              <!--begin::Item-->
              <div class="card border-top-0">
                <!--begin::Header-->
                <div class="card-header" id="faqHeading3">
                  <div class="card-title collapsed text-dark" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3" role="button">
                    <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                      </g>
                    </svg><!--end::Svg Icon--></span>                                        <div class="card-label text-dark pl-4">What do I need to do to start selling?</div>
                  </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="faq3" class="collapse" aria-labelledby="faqHeading3" data-parent="#faq">
                  <div class="card-body text-dark-50 font-size-lg pl-12">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                <!--end::Body-->
              </div>
              <!--end::Item-->

              <!--begin::Item-->
              <div class="card border-top-0">
                <!--begin::Header-->
                <div class="card-header" id="faqHeading4">
                  <div class="card-title collapsed text-dark" data-toggle="collapse" data-target="#faq4" aria-expanded="false" aria-controls="faq4" role="button">
                    <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                      </g>
                    </svg><!--end::Svg Icon--></span>                                        <div class="card-label text-dark pl-4">What happens when I receive an order?</div>
                  </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="faq4" class="collapse" aria-labelledby="faqHeading4" data-parent="#faq">
                  <div class="card-body text-dark-50 font-size-lg pl-12">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                <!--end::Body-->
              </div>
              <!--end::Item-->

              <!--begin::Item-->
              <div class="card border-top-0">
                <!--begin::Header-->
                <div class="card-header" id="faqHeading5">
                  <div class="card-title collapsed text-dark" data-toggle="collapse" data-target="#faq5" aria-expanded="false" aria-controls="faq5" role="button">
                    <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                      </g>
                    </svg><!--end::Svg Icon--></span>                                        <div class="card-label text-dark pl-4">What are the supported third-party payments?</div>
                  </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="faq5" class="collapse" aria-labelledby="faqHeading5" data-parent="#faq">
                  <div class="card-body text-dark-50 font-size-lg pl-12">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                <!--end::Body-->
              </div>
              <!--end::Item-->

              <!--begin::Item-->
              <div class="card border-top-0">
                <!--begin::Header-->
                <div class="card-header" id="faqHeading6">
                  <div class="card-title collapsed text-dark" data-toggle="collapse" data-target="#faq6" aria-expanded="false" aria-controls="faq6" role="button">
                    <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                      </g>
                    </svg><!--end::Svg Icon--></span>                                        <div class="card-label text-dark pl-4">What currencies are available?</div>
                  </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="faq6" class="collapse" aria-labelledby="faqHeading6" data-parent="#faq">
                  <div class="card-body text-dark-50 font-size-lg pl-12">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                <!--end::Body-->
              </div>
              <!--end::Item-->

              <!--begin::Item-->
              <div class="card border-top-0">
                <!--begin::Header-->
                <div class="card-header" id="faqHeading7">
                  <div class="card-title collapsed text-dark" data-toggle="collapse" data-target="#faq7" aria-expanded="false" aria-controls="faq7" role="button">
                    <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                      </g>
                    </svg><!--end::Svg Icon--></span>                                        <div class="card-label text-dark pl-4">How does shipping work?</div>
                  </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="faq7" class="collapse" aria-labelledby="faqHeading7" data-parent="#faq">
                  <div class="card-body text-dark-50 font-size-lg pl-12">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                <!--end::Body-->
              </div>
              <!--end::Item-->

              <!--begin::Item-->
              <div class="card border-top-0">
                <!--begin::Header-->
                <div class="card-header" id="faqHeading8">
                  <div class="card-title collapsed text-dark" data-toggle="collapse" data-target="#faq8" aria-expanded="false" aria-controls="faq8" role="button">
                    <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                      </g>
                    </svg><!--end::Svg Icon--></span>                                        <div class="card-label text-dark pl-4">What is a merchant agreement?</div>
                  </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="faq8" class="collapse" aria-labelledby="faqHeading8" data-parent="#faq">
                  <div class="card-body text-dark-50 font-size-lg pl-12">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                <!--end::Body-->
              </div>
              <!--end::Item-->

              <!--begin::Item-->
              <div class="card border-top-0">
                <!--begin::Header-->
                <div class="card-header" id="faqHeading9">
                  <div class="card-title collapsed text-dark" data-toggle="collapse" data-target="#faq9" aria-expanded="false" aria-controls="faq9" role="button">
                    <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                      </g>
                    </svg><!--end::Svg Icon--></span>                                        <div class="card-label text-dark pl-4">Where can I find my sales reports?</div>
                  </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div id="faq9" class="collapse" aria-labelledby="faqHeading9" data-parent="#faq">
                  <div class="card-body text-dark-50 font-size-lg pl-12">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                <!--end::Body-->
              </div>
              <!--end::Item-->
            </div>
            <!--end::Accordion-->
          </div>
          <!--end::Tab Content-->
        </div>
      </div>
      <!--end::Row-->
    </div>
    <!--end::Body-->
  </div>
  <!--end::Item-->
</div>
@endpush
