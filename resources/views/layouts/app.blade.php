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
    .blog-sidebar .search form button:hover
    {
      /* box-shadow: 0 0 20px 0px {{getSystemSetting('primary_color')->value}} !important; */
    }

    
/* Nav button */
.button.type1 {
    color: #566473;
}

.button.type1.type1::after,
.button.type1.type1::before {
    content: "";
    display: block;
    position: absolute;
    width: 20%;
    height: 20%;
    border: 2px solid;
    transition: all 0.6s ease;
    border-radius: 2px;
}

.button.type1.type1::after {
    bottom: 0;
    right: 0;
    border-top-color: transparent;
    border-left-color: transparent;
    border-bottom-color: #566473;
    border-right-color: #566473;
}

.button.type1.type1::before {
    top: 0;
    left: 0;
    border-bottom-color: transparent;
    border-right-color: transparent;
    border-top-color: #566473;
    border-left-color: #566473;
}

.button.type1.type1:hover:after,
.button.type1.type1:hover:before {
    width: 100%;
    height: 100%;
}

.button.type2 {
    color: #16a085;
}

.button.type2.type2:after,
.button.type2.type2:before {
    content: "";
    display: block;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #16a085;
    transition: all 0.3s ease;
    transform: scale(0.85);
}

.button.type2.type2:hover:before {
    top: 0;
    transform: scale(1);
}

.button.type2.type2:hover:after {
    transform: scale(1);
}

.button.type3 {
    color: #435a6b;
}

.button.type3.type3::after,
.button.type3.type3::before {
    content: "";
    display: block;
    position: absolute;
    width: 20%;
    height: 20%;
    border: 2px solid;
    transition: all 0.6s ease;
    border-radius: 2px;
}

.button.type3.type3::after {
    bottom: 0;
    right: 0;
    border-top-color: transparent;
    border-left-color: transparent;
    border-bottom-color: #435a6b;
    border-right-color: #435a6b;
}

.button.type3.type3::before {
    top: 0;
    left: 0;
    border-bottom-color: transparent;
    border-right-color: transparent;
    border-top-color: #435a6b;
    border-left-color: #435a6b;
}

.button.type3.type3:hover:after,
.button.type3.type3:hover:before {
    border-bottom-color: #435a6b;
    border-right-color: #435a6b;
    border-top-color: #435a6b;
    border-left-color: #435a6b;
    width: 100%;
    height: 100%;
}

.button.type4 {
    color: red;
}

.button.type4::after {
    content: "";
    display: block;
    position: absolute;
    height: 2px;
    width: 0;
    left: 0;
    background-color: red;
    transition: width 0.3s ease-in-out;
}

.button.type4::after {
    bottom: 0;
}

.button.type4:hover::after {
    width: 50px;
}

/* New nav */
.click_button:hover{cursor: pointer}
    .click_button {
      background: transparent; outline: none;
      position: relative;
      border: 2px solid #111;
      padding: 15px 50px;
      overflow: hidden;
    }

    /*button:before (attr data-hover)*/
    .click_button:hover:before{opacity: 1; transform: translate(0,0);}
    .click_button:before{
      content: attr(data-hover);
      position: absolute;
      /* top: 1.1em;  */
      left: 7%;
      width: 100%;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-weight: 800;
      font-size: .8em;
      opacity: 0;
      transform: translate(-100%,0);
      transition: all .3s ease-in-out;
    }
      /*button div (button text before hover)*/
      .click_button:hover div{opacity: 0; transform: translate(100%,0)}
      .click_button div{
        text-transform: uppercase;
        letter-spacing: 3px;
        font-weight: 800;
        font-size: .8em;
        transition: all .3s ease-in-out;
      }
/**
CUSTOM
*/
.site-header.fixed-header .main-menu li a{
  padding: 5px !important;
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
          <li><a href="{{ url('/page/courses') }}">Courses</a></li>
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
                <li><a href="{{ url('/') }}" class="click_button" data-hover="Home"><div>Home</div></a></li>
                <li><router-link :to="{ name : 'about-us' }" class="click_button" data-hover="About Us"><div>About Us</div></a></li>
                <li><router-link :to="{ name : 'contact-us' }" class="click_button" data-hover="Contact Us"><div>Contact Us</div></a></li>
                <li><router-link :to="{ name : 'our-team' }" class="click_button" data-hover="Our Team"><div>Our Team</div></a></li>
                <li><router-link :to="{ name : 'blog' }" class="click_button" data-hover="Blog"><div>Blog</div></a></li>
                <li><router-link :to="{ name : 'courses' }" class="click_button" data-hover="Courses"><div>Courses</div></a></li>
              </ul>
          </div>
          <div class="header-widgets">
            <ul class="right-menu">
              {{-- <li class="menu-item menu-search">
                <a href="#search" id="menu-search-btn">
                  <i class="fa fa-search"></i>
                </a>
              </li> --}}
              
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
    {{-- <div id="search">
      <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" data-url="{{ route('searching') }}" id="searching" placeholder="Type to search..." required="" onkeyup="PostSearch(this)">
            <div style="background: #fff; display: none; width: 80%; max-height: 400px; overflow-y: scroll; margin: 0 auto; border-radius: 10px; margin-top: 28%; padding: 1rem 0;" id="show_post"></div>
            <button type="submit" class="primary-button"><i class="fa fa-search"></i></button>
        </form>
    </div> --}}


    <div class="main-content">
      @yield('content')
      <router-view></router-view>
    </div>
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
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f1ca813dc314e47"></script>
  </body>

</html>
