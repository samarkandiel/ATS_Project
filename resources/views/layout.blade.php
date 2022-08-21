<!DOCTYPE html>
<html lang="en">
    <head>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
<!-- Stylesheets-->
<link rel="stylesheet" type="text/css" href="{{ asset('//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
        <title>@yield('title')</title>
        @yield('page-styles')
    </head>
    <body>
        <header class="page-header">
            <!-- RD Navbar-->
          <div class="rd-navbar-wrap">
    <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="60px" class="rd-navbar rd-navbar-float">
      <div data-rd-navbar-toggle=".rd-navbar-top-panel" class="rd-navbar-collapse-toggle"><span></span></div>
      <div class="rd-navbar-top-panel">
        <div class="rd-navbar-top-panel-left">
          <div class="rd-navbar-top-panel-200"><span class="text-middle icon icon-sm mdi mdi-map-marker"></span><a href="http://maps.google.com/?q=131 West 33rd St. unit 10D, New York NY-10001" class="text-middle" target="_blank">131 West 33rd St. unit 10D, New York NY-10001</a></div>
          <div><span class="text-middle icon icon-sm mdi mdi-phone"></span><a href="callto:+18332873273" class="text-middle">1-
  833-287-3273</a></div>
          <div><span class="text-middle icon icon-sm mdi mdi-email-open"></span><a href="mailto:support@atsfares.com" class="text-middle">support@atsfares.com</a></div>
        </div>
        <div class="rd-navbar-top-panel-right">
          <div>
            <ul class="list-inline">
              <li><a href="#" class="icon fa-facebook"></a></li>
              <li><a href="#" class="icon fa-twitter"></a></li>
              <li><a href="#" class="icon fa-pinterest-p"></a></li>
              <li><a href="#" class="icon fa-vimeo"></a></li>
              <li><a href="#" class="icon fa-google-plus"></a></li>
              <li><a href="#" class="icon fa-rss"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="rd-navbar-inner">
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel">
          <!-- RD Navbar Toggle-->
          <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
          <!-- RD Navbar Brand-->
          <div class="rd-navbar-brand"><a href="index.php" class="reveal-inline-block brand-name"><img src="images/logo-dark.png" width="95" alt="" class="img-responsive center-block veil-md"><img src="images/logo-dark.png" width="166" height="55" alt="" class="img-responsive center-block veil reveal-md-inline-block"></a></div>
        </div>
        <div class="rd-navbar-nav-wrap">
          <!-- RD Navbar Nav-->
          <ul class="rd-navbar-nav">
      
            <li ><a href="{{ url("/commissions") }}">Commissions</a></li>
            <li ><a href="page.php?logintravel">Airfares</a></li>
             <li ><a href="page.php?logintravel">Hotels/Cars</a></li>
            <li ><a href="http://bellavistatours.com/">Vacations</a></li>
            </li>
            <li><a href="#">About us</a>
              <!-- RD Navbar Dropdown-->
              <ul class="rd-navbar-dropdown">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Platform</a></li>
                <li><a href="#">Contact Us</a></li>
                </li>
              </ul>
              <!-- RD Navbar Dropdown-->
              <ul class="rd-navbar-dropdown">
                <li><a href="page.php?overview">Overview</a></li>
                <li><a href="page.php?platform">Platform</a></li>
                <li><a href="page.php?contacts">Contact Us</a></li>
                </li>
              </ul>
            </li>
         
          </ul>
        </div>
      </div>
    </nav>
  </div>
          </header>    
        @yield('content')
          <!-- Page Footer-->
          <footer class="page-footer">
            <div class="shell shell-wide text-sm-left">
          <div class="range section-60 section-md-90">
          <div class="cell-sm-6 cell-lg-3"><a href="./" class="reveal-inline-block"><span class="h3 text-ubold">ATS Fares</span></a>
          <p class="offset-top-24">ATS is a leading air fare consolidator, deliver the best fares, products, service, and opportunities to travel suppliers, partners, and vendors looking to improve their services and expand their business Working with more than 50+ carriers and being in business since 84' makes us truly your global partner.</div>
          <div class="cell-sm-6 cell-lg-3">
          <h5 class="text-bold">Accredited by</h5>
          <hr class="divider divider-50 divider-info divider-sm-left">
          <div class="offset-top-40">
            <div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
              <div class="unit-left"><img src="images/footer-01.png" width="100" height="10" alt="" class="img-responsive center-block"></div>
            </div><br/><br/>
            <div class="offset-top-30 unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
              <div class="unit-left"><img src="images/footer-02.png" width="100" height="10" alt="" class="img-responsive center-block"></div>
            </div>
          </div>
          </div>
          <div class="cell-sm-6 cell-lg-3">
          <h5 class="text-bold">Supported GDS's</h5>
          <hr class="divider divider-50 divider-info divider-sm-left">
          <div class="">
            <div class="offset-top-30 unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
              <div class="unit-left" style="margin-left:-20px"><img src="images/gds-logos.png" width="180"  alt="" class="img-responsive center-block"></div>
            </div>
          </div>
          </div>
          <div class="cell-sm-6 cell-lg-3 offset-top-40 offset-lg-top-0">
          <div class="inset-xl-left-50">
            <h5 class="text-bold">Contact Us</h5>
            <hr class="divider divider-50 divider-info divider-sm-left">
            <!-- RD Mailform-->
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform-native.php" class="offset-top-40 rd-mailform text-sm-left">
              <div class="form-group form-group-sm">
                <label for="footer-name" class="text-gray-light form-label">Your name</label>
                <input id="footer-name" type="text" name="name" class="form-control form-control-dark">
              </div>
              <div class="form-group form-group-sm">
                <label for="footer-email" class="text-gray-light form-label">Your e-mail</label>
                <input id="footer-email" type="email" name="email" class="form-control form-control-dark">
              </div>
              <div class="form-group form-group-sm">
                <label for="footer-message" class="text-gray-light form-label">Message</label>
                <textarea id="footer-message" style="height: 90px;" name="message"  class="form-control form-control-dark"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-xs btn-naira btn-naira-up"><span class="icon fa-envelope-o"></span><span>Send</span></button>
            </form>
          </div>
          </div>
        </div>
          <hr>
          </div>
          <div class="shell shell-wide page-footer-min small">
          <div class="range range-xs-middle">
          <div class="cell-sm-6 text-sm-left">
          <ul class="list-inline">
            <li><a href="#" class="icon fa-facebook"></a></li>
            <li><a href="#" class="icon fa-twitter"></a></li>
            <li><a href="#" class="icon fa-pinterest-p"></a></li>
            <li><a href="#" class="icon fa-vimeo"></a></li>
            <li><a href="#" class="icon fa-google-plus"></a></li>
            <li><a href="#" class="icon fa-rss"></a></li>
          </ul>
          </div>
          <div class="cell-sm-6 text-sm-right offset-top-20 offset-sm-top-0">
          <p>&#169; <span id="copyright-year"></span> ATS All rights reserved. <a href="page.php?privacy">Privacy Policy</a></p>
          </div>
          </div>
          </div>
          </footer>
        <script src="{{ asset('js/core.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
       
        @yield('page-scripts')
    </body>
</html>