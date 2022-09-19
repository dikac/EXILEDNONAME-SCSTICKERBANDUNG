<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <h3 data-target="#collapse_3">Contacts</h3>
        <div class="collapse dont-collapse-sm contacts" id="collapse_3">
          <ul>
            <li><i class="icon_house_alt"></i> {{ $setting->address }} </li>
            <li><i class="icon_mobile"></i> {{ $setting->phone }} </li>
            <li><i class="icon_mail_alt"></i><a href="#0"> {{ $setting->email }} </a></li>
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
          <li><span> ©2022 {{ $setting->name }} </span></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
