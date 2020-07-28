<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/styles/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/styles/main.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/styles/custom.css')}}" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>

  <style>
    .js-preloader,
     section.footer-content .cta-footer,
    .main-pink-button a,
    section.footer-content .main-footer ul.social-icons li a:hover,
    .go-top,
    section.contact-us .inner-content button:after, 
    .blog-sidebar .search form button, 
    .blog-sidebar .about-me ul.social-icons li a, 
    #search{
      background-color: {{getSystemSetting('primary_color')->value}} !important;
    }
    .main-white-button a, 
    section.footer-content .main-footer ul.social-icons li a, 
    .main-menu > li > a:hover, 
    .page-heading span, 
    section.contact-info .info-item .icon, 
    .section-heading h6, 
    .blog-sidebar .about-me ul.social-icons li a:hover,
    section.product-details .single-product .right-content span
    
     {
      color: {{getSystemSetting('font_color')->value}} !important;
    }
    
    section.footer-content .main-footer ul.social-icons li a:hover, 
    .header-widgets .right-menu .menu-search a:hover, 
    .blog-sidebar .about-me ul.social-icons li a:hover, 
    .blog-sidebar .search form button:hover{
      box-shadow: 0 0 20px 0px {{getSystemSetting('primary_color')->value}} !important;
    }
  </style>

  <body>
<div id="app">


    <!-- Preloader -->
    <div id="js-preloader" class="js-preloader">
      <div class="content">
        <img src="{{ filePath(getSystemSetting('type_logo')->value) }}" alt="">
      </div>
      <div class="preloader-inner">
      </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-nav-wrapper">
      <div class="mobile-menu-inner">
        <ul class="mobile-menu">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/page/about-us') }}">About Us</a></li>
          <li><a href="{{ url('/page/contact-us') }}">Contact Us</a></li>
          <li><a href="{{ url('/page/our-team') }}">Our Team</a></li>
          <li><a href="{{ url('/page/blog') }}">Blog</a></li>
          <li><a href="{{ url('/page/course') }}">Courses</a></li>
          <li><a href="{{ url('/enroll/course') }}">Enroll Course</a></li>
        </ul>
      </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <header class="site-header fixed-header">
      <div class="container expanded">
        <div class="header-wrap">
          <div class="fixed-header-logo">
            <a href="{{ url('/') }}"><img src="{{ filePath(getSystemSetting('type_logo')->value) }}" class="w-17" alt=""></router-link>
          </div>
          <div class="is-fixed-header-logo">
            <a href="{{ url('/') }}"><img src="{{ filePath(getSystemSetting('type_logo')->value) }}" class="w-17" alt=""></router-link>
          </div>
          <div class="header-nav">
              <ul class="main-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><router-link :to="{ name : 'about-us' }">About Us</a></li>
                <li><router-link :to="{ name : 'contact-us' }">Contact Us</a></li>
                <li><router-link :to="{ name : 'our-team' }">Our Team</a></li>
                <li><router-link :to="{ name : 'blog' }">Blog</a></li>
                <li><router-link :to="{ name : 'courses' }">Courses</a></li>
              </ul>
          </div>
          <div class="header-widgets">
            <ul class="right-menu">
              <li class="menu-item menu-search">
                <a href="#search" id="menu-search-btn">
                  <i class="fa fa-search"></i>
                </a>
              </li>
              <li class="menu-item free-quote">
                <div class="main-pink-button">
                  <a href="{{route('enroll.index')}}">Enroll Course</a>
                </div>
              </li>
              <li class="menu-item menu-mobile-nav">
                <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                  <span class="hamburger"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <!-- Search -->
    <div id="search">
      <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" data-url="{{ route('searching') }}" id="searching" placeholder="Type to search..." required="" onkeyup="PostSearch(this)">
            <div style="background: #fff; display: none; width: 80%; max-height: 400px; overflow-y: scroll; margin: 0 auto; border-radius: 10px; margin-top: 28%; padding: 1rem 0;" id="show_post"></div>
            <button type="submit" class="primary-button"><i class="fa fa-search"></i></button>
        </form>
    </div>


    <div class="main-content">
      @yield('content')
      <router-view></router-view>
    </div>


    <section class="footer-content">
      <div class="cta-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h2>Interested to get<br>our full <em>featured</em> services?</h2>
            </div>
            <div class="col-lg-4">
              <div class="main-white-button">
                <a href="#">Get Started Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>{{ getSystemSetting('type_name')->value }}</h4>
              </div>
              <p class="about-oxana">Shaman synth retro slow-carb. Vape taxidermy twee, put a bird on it fran xezen celiac unicorn gerstache coloring book.</p>
            </div>
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Useful Links</h4>
              </div>
              <ul class="useful-links">
                <li><a href="#">About Oxana</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
              <ul class="useful-links">
                <li><a href="#">Recent Posts</a></li>
                <li><a href="#">Case Studies</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">FAQ’s</a></li>
              </ul>
            </div>
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Get In Touch!</h4>
              </div>
              <ul class="more-info">
                <li>Email: <a href="#">{{ getSystemSetting('type_mail')->value }}</a></li>
                <li>Phone: <a href="#">{{ getSystemSetting('type_number')->value }}</a></li>
                <li>Address: <a href="#">{{ getSystemSetting('type_address')->value }}</a></li>
              </ul>
            </div>
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Find Us</h4>
              </div>
              <p>Shaman synth retro slow-carb. Vape taxidermy twee, put a bird.</p>
              <ul class="social-icons">
                <li><a href="{{ getSystemSetting('type_fb')->value }}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{ getSystemSetting('type_tw')->value }}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{ getSystemSetting('type_google')->value }}"><i class="fa fa-google"></i></a></li>
                <li><a href="{{ getSystemSetting('type_linked')->value }}"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{{ getSystemSetting('type_youtube')->value }}"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-12">
              <div class="sub-footer">
                <p>Copyright © {{ date('Y') }} <a href="#">{{ getSystemSetting('type_name')->value }}</a>. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Go To Top -->
    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

</div>

    <!-- Scripts -->
    <script src="{{ asset('frontend/scripts/vendors/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/owl-carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/slide-nav.min.js') }}"></script>
    <script src="{{ asset('frontend/scripts/vendors/accordions.js') }}"></script>
    <script src="{{ asset('frontend/scripts/main.js') }}"></script>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f1ca813dc314e47"></script>

  </body>

</html>
