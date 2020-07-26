
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title> {{ getSystemSetting('type_name')->value }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="{{ getSystemSetting('type_name')->value }}"/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{ asset('homepage/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('homepage/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('homepage/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('homepage/css/yourstyle.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{ filePath(getSystemSetting('favicon_icon')->value) }}">
    </head>

    <body>
      <div class="loader">
         <div class="tm-loader">
             <div id="circle"></div>
         </div>
     </div>
     <!--================= main start ================-->
     <div id="main">
         <!--=============== header ===============-->

         <!-- Header   end-->
         <!--=============== wrapper ===============-->
         <div id="wrapper">
             <!--=============== content-holder ===============-->
             <div class="content-holder elem scale-bg2   no-padding">
                 <!-- Page title -->

                 <!-- Page title  end-->

                 <!--  Navigation end -->
                 <!--  Content -->
                 <div class="content full-height no-padding home-content ">
                     <!--full-height wrap -->
                     <div class="full-height-wrap">
                         <!-- 1 -->
                         <div class="hero-grid big-column">
                             <div class="hero-slider synkslider owl-carousel" data-attime="3220" data-rtlt="false">
                                 <div class="item">
                                     <div class="bg" style="background-image:url(https://res.cloudinary.com/dhe6napl7/image/upload/v1595766017/heist.png)"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url(https://res.cloudinary.com/dhe6napl7/image/upload/v1595766017/heist.png)"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url(https://res.cloudinary.com/dhe6napl7/image/upload/v1595766017/heist.png)"></div>
                                 </div>
                             </div>
                         </div>
                         <!-- 1 end -->
                         <!-- 2 -->
                         <div class="hero-grid small-column">
                             <div class="hero-slider owl-carousel" data-attime="3220" data-rtlt="false">
                                 <div class="item">
                                     <div class="bg" style="background-image:url(https://res.cloudinary.com/dhe6napl7/image/upload/v1595766609/HASANIK_ENGLISH_4.gif)"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url(https://res.cloudinary.com/dhe6napl7/image/upload/v1595766864/Hasanik_English_1.png)"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url(https://res.cloudinary.com/dhe6napl7/image/upload/v1595766927/Hasanik_English_2.png)"></div>
                                 </div>
                             </div>
                         </div>
                         <!-- 2end -->
                         <!-- 3 -->
                         <div class="hero-grid small-column">
                             <div class="hero-slider owl-carousel"  data-attime="3220" data-rtlt="true">
                                 <div class="item">
                                     <div class="bg" style="background-image:url(https://res.cloudinary.com/dhe6napl7/image/upload/v1595766927/Hasanik_English_2.png)"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url(https://res.cloudinary.com/dhe6napl7/image/upload/v1595766609/HASANIK_ENGLISH_4.gif)"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url(https://res.cloudinary.com/dhe6napl7/image/upload/v1595766864/Hasanik_English_1.png)"></div>
                                 </div>
                             </div>
                         </div>
                         <!-- 3end -->
                         {{-- <div class="overlay"></div> --}}
                         <!-- enter-wrap -->
                         {{-- <div class="enter-wrap-holder column-wrap">
                             <div class="enter-wrap">
                                 <h3> Hasanik <br> English <br></h3>
                             </div>
                         </div> --}}
                         <!-- enter-wrap end  -->
                     </div>
                     <!-- full-height-wrap end  -->
                 </div>
                 <!-- Content   end -->
                 <!-- share  -->

                 <!-- share end -->
             </div>
             <!-- Content holder  end -->
         </div>
         <!-- wrapper end -->
         <!--=============== footer ===============-->

         <!-- footer end -->


         <div class="menu">
  <nav class="menu__nav">
    <ul class="menu__list r-list">
      <li class="menu__group">
        <a href="{{ url('/') }}" class="menu__link r-link">
            <img src="{{ filePath(getSystemSetting('type_logo')->value) }}" alt="">
        </a>
      </li>
      <li class="menu__group">
        <a href="{{ url('/') }}" class="menu__link r-link">Home</a>
      </li>
      <li class="menu__group">
        <a href="{{ url('/page/about-us') }}" class="menu__link r-link">About Us</a>
      </li>
      <li class="menu__group">
        <a href="{{ url('/page/contact-us') }}" class="menu__link r-link">Contact Us</a>
      </li>
      <li class="menu__group">
        <a href="{{ url('/page/our-team') }}" class="menu__link r-link">Our Team</a>
      </li>
      <li class="menu__group">
        <a href="{{ url('/page/blog') }}" class="menu__link r-link">Blog</a>
      </li>
      <li class="menu__group">
        <a href="{{ url('/page/courses') }}" class="menu__link r-link">Courses</a>
      </li>
    </ul>
  </nav>
  <button class="menu__toggle r-button" type="button">
    <span class="menu__hamburger m-hamburger">
      <span class="m-hamburger__label">
        <span class="menu__screen-reader screen-reader">Open menu</span>
      </span>
    </span>
  </button>
</div>

     </div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" type="text/javascript"></script>
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{ asset('homepage/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('homepage/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('homepage/js/core.js') }}"></script>
        <script type="text/javascript" src="{{ asset('homepage/js/scripts.js') }}"></script>
    </body>
</html>
