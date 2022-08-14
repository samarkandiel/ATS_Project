@extends('layout')
@section('title')
ATS Contacts
@endsection
@section('content')
<form action="{{ url('/contacts') }}" method="POST">
  @csrf

<div class="page text-center">
    <!-- Page Content-->
    <main class="page-content">
      <section>
        <div class="shell"></div>
      </section>
      <section class="section-top-80 section-md-top-0">
        <div class="shell shell-wide text-md-left">
          <div class="range">
            <div class="cell-md-7 cell-lg-5 section-md-80 section-lg-120">
              <h2 class="text-ubold">Get in Touch</h2>
              <hr class="divider divider-md-left divider-primary divider-80">
              <p class="offset-top-20 offset-md-top-40">You can contact us any way that is convenient for you. We are available 24/7 via email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
              <!-- RD Mailform-->
              <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform-native.php" class="offset-top-30 range rd-mailform text-left">
                <div class="cell-sm-6">
                  <div class="form-group">
                    <label for="contact-name" class="form-label form-label-outside">First name</label>
                    <input id="contact-name" type="text" name="name"  class="form-control form-control-gray">
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                  <div class="form-group">
                    <label for="contact-surname" class="form-label form-label-outside">Last name</label>
                    <input id="contact-surname" type="text" name="surname" class="form-control form-control-gray">
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-20">
                  <div class="form-group">
                    <label for="contact-email" class="form-label form-label-outside">E-mail</label>
                    <input id="contact-email" type="email" name="email" class="form-control form-control-gray">
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-20">
                  <div class="form-group">
                    <label for="contact-phone" class="form-label form-label-outside">Phone</label>
                    <input id="contact-phone" type="text" name="phone"  class="form-control form-control-gray">
                  </div>
                </div>
                <div class="cell-md-12 offset-top-20">
                  <div class="form-group">
                    <label for="contact-message" class="form-label form-label-outside">Message</label>
                    <textarea id="contact-message" name="message"  class="form-control form-control-gray"></textarea>
                  </div>
                  <div class="offset-top-20 text-center text-md-left">
                    <button style="min-width: 140px;" type="submit" class="btn btn-primary btn-sm btn-naira btn-naira-up"><span class="icon fa-envelope-o"></span><span>Send</span></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="cell-xl-2 cell-lg-3 cell-md-4 cell-xl-preffix-1 section-md-80 section-lg-120">
              <div class="range text-left">
                <div class="cell-md-12 cell-xs-6">
                  <h5 class="text-bold hr-title">Phones</h5>
                  <div class="media">
                    <div class="media-left"><span class="icon icon-sm text-info-dr mdi mdi-phone"></span></div>
                    <div class="media-body">
                      <div><a href="callto:#" class="text-gray">833-287-3273</a></div>
                    </div>
                  </div>
                </div>
                <div class="cell-md-12 cell-xs-6 offset-top-40 offset-xs-top-0 offset-md-top-60">
                  <h5 class="text-bold hr-title">E-mail</h5>
                  <div class="media">
                    <div class="media-left"><span class="icon icon-sm text-info-dr mdi mdi-email-outline"></span></div>
                    <div class="media-body">
                      <div><a href="mailto:#" class="text-gray">support@atsfares.com</a></div>
                    </div>
                  </div>
                </div>
                <div class="cell-md-12 cell-xs-6 offset-top-40 offset-md-top-60">
                  <h5 class="text-bold hr-title">Address</h5>
                  <div class="media">
                    <div class="media-left"><span class="icon icon-sm text-info-dr mdi mdi-map-marker"></span></div>
                    <div class="media-body">
                      <div><a href="#" class="text-gray">131 West 33rd St. unit 10D, New York NY-10001</a></div>
                    </div>
                  </div>
                </div>
                <div class="cell-md-12 cell-xs-6 offset-top-40 offset-md-top-60">
                  <h5 class="text-bold hr-title">Opening Hours</h5>
                  <div class="media">
                    <div class="media-left"><span class="icon icon-sm text-info-dr mdi mdi-calendar-clock"></span></div>
                    <div class="media-body">
                      <div>Mon–Fri 8:00am–6:00pm<br>Sat 10:00am–4:00pm<br>Sun Closed</div>
                    </div>
                  </div>
                </div>
                <div class="cell-md-12 offset-top-40 offset-md-top-60">
                  <h5 class="text-bold hr-title">Socials</h5>
                  <ul class="list-inline offset-top-24">
                    <li><a href="#" class="icon text-gray icon-xxs fa-facebook"></a></li>
                    <li><a href="#" class="icon text-gray icon-xxs fa-twitter"></a></li>
                    <li><a href="#" class="icon text-gray icon-xxs fa-pinterest-p"></a></li>
                    <li><a href="#" class="icon text-gray icon-xxs fa-vimeo"></a></li>
                    <li><a href="#" class="icon text-gray icon-xxs fa-google-plus"></a></li>
                    <li><a href="#" class="icon text-gray icon-xxs fa-rss"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-lg-3 cell-lg-preffix-1 rd-google-map-abs offset-top-40 offset-md-top-0">
              <!-- RD Google Map-->
              <div data-zoom="16" data-x="-73.989481" data-y="40.750138" class="rd-google-map rd-google-map__model">
                <ul class="map_locations">
                  <li data-y="40.750138" data-x="-73.989481">
                    <p>131 West 33rd St. unit 10D, New York NY-10001</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Java script-->
  </form>
  @endsection
  @section('page-scripts')
    <script src="js/core.min.js"></script>
<script src="js/script.js"></script>  
@endsection