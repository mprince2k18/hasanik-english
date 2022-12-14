
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
        <link type="text/css" rel="stylesheet" href="https://res.cloudinary.com/dhe6napl7/raw/upload/v1598037860/hasanik/homepage/css/reset.css">
        <link type="text/css" rel="stylesheet" href="https://res.cloudinary.com/dhe6napl7/raw/upload/v1598037861/hasanik/homepage/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="https://res.cloudinary.com/dhe6napl7/raw/upload/v1598037861/hasanik/homepage/css/style.css">
        <link type="text/css" rel="stylesheet" href="{{ asset('homepage/css/yourstyle.css') }}">

        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{ filePath(getSystemSetting('favicon_icon')->value) }}">
        <script charset="UTF-8" src="//web.webpushs.com/js/push/be55ae4307a3b2bc0e7ef658a9dff2c0_1.js" async></script>
    </head>

    <style>
        .w-10{
            width: 10%;
            margin: 0 auto;
        }
        .f-22{
            font-size: 22px;
        }
    </style>

    <script>
            function detectmob() {
            if(window.innerWidth <= 801) {
                return true;
            } else {
                return false;
            }
            }

            if (detectmob()){
            top.location.href="http://m.hasanikenglish.com";
            }
        </script>

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
             <div class="content-holder elem scale-bg2 no-padding">
                 <!-- Page title -->

                 <!-- Page title  end-->

                 <!--  Navigation end -->
                 <!--  Content -->
                 <div class="content full-height no-padding home-content ">
                     <!--full-height wrap -->
                     <div class="full-height-wrap">
                         <!-- 1 -->
                                 @php
                                     $asides = App\Slider::where('is_active', 0)->where('type', 'aside')->first();
                                     $tops = App\Slider::where('is_active', 0)->where('type', 'top')->get();
                                     $bottoms = App\Slider::where('is_active', 0)->where('type', 'bottom')->get();
                                 @endphp
                         <div class="hero-grid big-column">
                           
                                 <div class="item">
                                     <div class="bg" 
                                     style="background-image:url({{ filePath($asides->slider ?? '') }})">
                                    </div>
                                 </div>

                                 <div class="enter-wrap-holder column-wrap">
                               <div class="enter-wrap">
                                 <a href="{{ route('enroll.index') }}" class="glow-on-hover" type="button">
                                <div class="btn-enroll">
                                  ENROLL NOW
                                  <div class="btn2"></div>
                                </div> 
                                </a>  
                               </div>
                           </div>
                         </div>
                         <!-- 1 end -->
                         <!-- 2 -->
                         <div class="hero-grid small-column" style="height: 100%;">
                             <div class="hero-slider owl-carousel" data-attime="3220" data-rtlt="false">
                              @foreach ($tops as $top)
                              <div class="item">
                                    <img src="{{ filePath($top->slider ?? '') }}" alt="" class="img-fluid">
                                </div>
                              @endforeach
                             </div>
                         </div>
                           
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
        {{-- <a href="{{ url('/page/about-us') }}" class="menu__link r-link f-22">About Us</a> --}}
        <div class="flip about">
          <a href="{{ url('/page/about-us') }}" >
            <div class="front">About Us</div>
            <div class="back">About Us</div>
          </a>
        </div>
      </li>

      <li class="menu__group">
        <div class="flip team">
          <a href="{{ url('/page/our-team') }}" >
            <div class="front">Our Team</div>
            <div class="back">Our Team</div>
          </a>
        </div>
      </li>

      <li class="menu__group">
        <div class="flip blog">
          <a href="{{ url('/page/blog') }}" >
            <div class="front">Our Blogs</div>
            <div class="back">Our Blogs</div>
          </a>
        </div>
      </li>

      <li class="menu__group">
        <div class="flip courses">
          <a href="{{ url('/page/courses') }}" >
            <div class="front">Our Courses</div>
            <div class="back">Our Courses</div>
          </a>
        </div>
      </li>

      <li class="menu__group">
        <div class="flip contact">
          <a href="{{ url('/page/contact-us') }}" >
            <div class="front">Contact Us</div>
            <div class="back">Contact Us</div>
          </a>
        </div>
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
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" type="text/javascript"></script> --}}
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="https://res.cloudinary.com/dhe6napl7/raw/upload/v1598037867/hasanik/homepage/js/jquery.min.js"></script>
        <script type="text/javascript" src="https://res.cloudinary.com/dhe6napl7/raw/upload/v1598037867/hasanik/homepage/js/plugins.js"></script>
        <script type="text/javascript" src="https://res.cloudinary.com/dhe6napl7/raw/upload/v1598037866/hasanik/homepage/js/core.js"></script>
        <script type="text/javascript" src="https://res.cloudinary.com/dhe6napl7/raw/upload/v1598037867/hasanik/homepage/js/scripts.js"></script>

        @include('sweetalert::alert')

    </body>
</html>
