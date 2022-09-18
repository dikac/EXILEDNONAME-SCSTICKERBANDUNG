<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Foogra - Discover & Book the best restaurants at the best price">
  <meta name="author" content="Ansonika">
  <title> SC STICKER CUTTING BANDUNG </title>
  <link rel="shortcut icon" href="/assets/frontend/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="/assets/frontend/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/assets/frontend/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/assets/frontend/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/assets/frontend/img/apple-touch-icon-144x144-precomposed.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
  <link href="/assets/frontend/css/bootstrap_customized.min.css" rel="stylesheet">
  <link href="/assets/frontend/css/style.css" rel="stylesheet">
  <link href="/assets/frontend/css/home.css" rel="stylesheet">
  <link href="/assets/frontend/css/custom.css" rel="stylesheet">
</head>

<body>

  <header class="header clearfix element_to_stick">
    <div class="container">
      <div id="logo">
        <a href="index.html">
          <img src="/assets/frontend/logo.jpg" width="140" height="75" alt="" class="logo_normal">
          <img src="/assets/frontend/logo.jpg" width="140" height="75" alt="" class="logo_sticky">
        </a>
      </div>
      <ul id="top_menu"><li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li></ul>
      <a href="#0" class="open_close"><i class="icon_menu"></i><span>Menu</span></a>

      <nav class="main-menu">
        <div id="header_menu">
          <a href="#0" class="open_close"><i class="icon_close"></i><span>Menu</span></a>
          <a href="index.html"><img src="/assets/frontend/logo.jpg" width="140" height="75" alt=""></a>
        </div>
        <ul><li class="submenu"><a href="#0" class="show-submenu"> Home </a></li></ul>
      </nav>
    </div>
  </header>

  <main>
    <div id="carousel-home">
      <div class="owl-carousel owl-theme">

        <div class="owl-slide cover" style="background-image: url(/assets/frontend/banner-2.jpg);">
          <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
              <div class="row justify-content-center justify-content-md-end">
                <div class="col-lg-6 static">
                  <div class="slide-text text-right white">
                    <h2 class="owl-slide-animated owl-slide-title">
                      Enjoy<br>unique food</h2>
                      <p class="owl-slide-animated owl-slide-subtitle">
                        Huge variery of food at the best price
                      </p>
                      <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="grid-listing-filterscol.html" role="button">Read more</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="owl-slide cover" style="background-image: url(/assets/frontend/img/slides/slide_home_1.jpg);">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                <div class="row justify-content-center justify-content-md-start">
                  <div class="col-lg-6 static">
                    <div class="slide-text white">
                      <h2 class="owl-slide-animated owl-slide-title">Discover<br>and Reserve</h2>
                      <p class="owl-slide-animated owl-slide-subtitle">
                        The best restaurants at the best price
                      </p>
                      <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="grid-listing-filterscol.html" role="button">Read more</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div id="icon_drag_mobile"></div>
      </div>
      <!-- /hero_single -->
      <div class="container margin_60_40">

        <div class="banner version_2">
          <div class="banner lazy" data-bg="url(/assets/frontend/banner.jpg)">
            <div class="wrapper align-items-center opacity-mask justify-content-center text-center" data-opacity-mask="rgba(0, 0, 0, 0.9)">
              <!-- <div class="wrapper d-flex align-items-center opacity-mask justify-content-center text-center" data-opacity-mask="rgba(0, 0, 0, 0)" style="background-color: rgba(0, 0, 0, 0);"> -->
              <div>
                <h3> SC STICKER CUTTING BANDUNG </h3>
                <p><small>
                  SC STICKER CUTTING BANDUNG BERGERAK DALAM BIDANG JASA ADVERTISING , PENYEDIA PEMBUATANAN SAFETY DESIGN, RAMBU RAMBU LALULINTAS, STICKER CUTOM, SUNBLAST, NEON BOX, PERBAIKAN NEON BOX, BRANDING MOBIL WRAPPING MOTOR MOBIL DLL.
                </small></p>
              </div>
            </div>
            <!-- /wrapper -->
          </div>
        </div>

        <div class="main_title">
          <span><em></em></span>
          <h2> Popular Products </h2>
          <p> Produk Terlaris Di Toko Kami </p>
          <a href="#0">View All</a>
        </div>

        <div class="owl-carousel owl-theme carousel_4">

          @foreach($product as $product)
          <div class="item">
            <div class="strip">
              <figure>
                <span class="ribbon off"> Ready Stock </span>
                <img src="/assets/frontend/img/lazy-placeholder.png" data-src="/photo/product/test/{{ $product->photo }}" class="owl-lazy" alt="">
                <a href="detail-restaurant.html" class="strip_info">
                  <small> ⭐ Popular </small>
                  <div class="item_title">
                    <span style="color: #fff"> {{ $product->name }}</span><br>
                    <small>27 Old Gloucester St</small>
                  </div>
                </a>
              </figure>
            </div>
          </div>
          <div class="item">
            <div class="strip">
              <figure>
                <span class="ribbon off"> Ready Stock </span>
                <img src="/assets/frontend/img/lazy-placeholder.png" data-src="/photo/product/test/{{ $product->photo }}" class="owl-lazy" alt="">
                <a href="detail-restaurant.html" class="strip_info">
                  <small> ⭐ Popular </small>
                  <div class="item_title">
                    <span style="color: #fff"> {{ $product->name }}</span><br>
                    <small>27 Old Gloucester St</small>
                  </div>
                </a>
              </figure>
            </div>
          </div>
          @endforeach

        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.02477537144!2d107.56346771397142!3d-6.887635695022948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5bfea9d3087%3A0x19695232076f3674!2sSC%20STICKER%20CUTTING%20BANDUNG!5e0!3m2!1sen!2sid!4v1663483395586!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
      <!-- /container -->

    </main>
    <!-- /main -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <h3 data-target="#collapse_3">Contacts</h3>
            <div class="collapse dont-collapse-sm contacts" id="collapse_3">
              <ul>
                <li><i class="icon_house_alt"></i> Jl. Ranca Bali No.4B, Pasirkaliki, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40514 </li>
                <li><i class="icon_mobile"></i> 0895-0285-5550 </li>
                <li><i class="icon_mail_alt"></i><a href="#0"> scsticker@gmail.com </a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-8 col-md-6">
            <h3 data-target="#collapse_4">Keep in touch</h3>
            <div class="collapse dont-collapse-sm" id="collapse_4">
              <div id="newsletter">
                <div id="message-newsletter"></div>
                <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                  <div class="form-group">
                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                    <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
                  </div>
                </form>
              </div>
              <div class="follow_us">
                <h5>Follow Us</h5>
                <ul>
                  <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/assets/frontend/img/twitter_icon.svg" alt="" class="lazy"></a></li>
                  <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/assets/frontend/img/facebook_icon.svg" alt="" class="lazy"></a></li>
                  <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/assets/frontend/img/instagram_icon.svg" alt="" class="lazy"></a></li>
                  <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/assets/frontend/img/youtube_icon.svg" alt="" class="lazy"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- /row-->
        <hr>
        <div class="row add_bottom_25">
          <div class="col-lg-6">
            <ul class="footer-selector clearfix">
              <li>
                <div class="styled-select lang-selector">
                  <select>
                    <option value="Bahasa" selected> Bahasa </option>
                  </select>
                </div>
              </li>
              <li>
                <div class="styled-select currency-selector">
                  <select>
                    <option value="IDR" selected> IDR </option>
                  </select>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="additional_links">
              <li><span> ©2022 SC Sticker Bandung </span></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--/footer-->

    <div id="toTop"></div><!-- Back to top button -->

    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->

    <!-- Sign In Modal -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
      <div class="modal_header">
        <h3>Sign In</h3>
      </div>
      <form>
        <div class="sign-in-wrapper">
          <a href="#0" class="social_bt facebook">Login with Facebook</a>
          <a href="#0" class="social_bt google">Login with Google</a>
          <div class="divider"><span>Or</span></div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">
            <i class="icon_mail_alt"></i>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password" value="">
            <i class="icon_lock_alt"></i>
          </div>
          <div class="clearfix add_bottom_15">
            <div class="checkboxes float-left">
              <label class="container_check">Remember me
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
          </div>
          <div class="text-center">
            <input type="submit" value="Log In" class="btn_1 full-width mb_5">
            Don’t have an account? <a href="account.html">Sign up</a>
          </div>
          <div id="forgot_pw">
            <div class="form-group">
              <label>Please confirm login email below</label>
              <input type="email" class="form-control" name="email_forgot" id="email_forgot">
              <i class="icon_mail_alt"></i>
            </div>
            <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
            <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
          </div>
        </div>
      </form>
      <!--form -->
    </div>
    <!-- /Sign In Modal -->

    <!-- COMMON SCRIPTS -->
    <script src="/assets/frontend/js/common_scripts.min.js"></script>
    <script src="/assets/frontend/js/slider.js"></script>
    <script src="/assets/frontend/js/common_func.js"></script>
    <script src="/assets/frontend/assets/validate.js"></script>

  </body>
  </html>
