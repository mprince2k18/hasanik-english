
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title> {{ env('APP_NAME') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend/homepage/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend/homepage/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend/homepage/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend/homepage/css/yourstyle.css') }}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{ asset('frontend/homepage/images/favicon.ico') }}">
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
                                     <div class="bg" style="background-image:url({{ asset('frontend/homepage/images/bg/2.jpg')}})"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url({{ asset('frontend/homepage/images/bg/2.jpg')}})"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url({{ asset('frontend/homepage/images/bg/2.jpg')}})"></div>
                                 </div>
                             </div>
                         </div>
                         <!-- 1 end -->
                         <!-- 2 -->
                         <div class="hero-grid small-column">
                             <div class="hero-slider owl-carousel" data-attime="3220" data-rtlt="false">
                                 <div class="item">
                                     <div class="bg" style="background-image:url({{ asset('frontend/homepage/images/bg/1.jpg')}})"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url({{ asset('frontend/homepage/images/bg/1.jpg')}})"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url({{ asset('frontend/homepage/images/bg/1.jpg')}})"></div>
                                 </div>
                             </div>
                         </div>
                         <!-- 2end -->
                         <!-- 3 -->
                         <div class="hero-grid small-column">
                             <div class="hero-slider owl-carousel"  data-attime="3220" data-rtlt="true">
                                 <div class="item">
                                     <div class="bg" style="background-image:url({{ asset('frontend/homepage/images/bg/1.jpg')}})"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url({{ asset('frontend/homepage/images/bg/1.jpg')}})"></div>
                                 </div>
                                 <div class="item">
                                     <div class="bg" style="background-image:url({{ asset('frontend/homepage/images/bg/1.jpg')}})"></div>
                                 </div>
                             </div>
                         </div>
                         <!-- 3end -->
                         <div class="overlay"></div>
                         <!-- enter-wrap -->
                         <div class="enter-wrap-holder column-wrap">
                             <div class="enter-wrap">
                                 <h3> Hasanik <br> English <br></h3>
                                 <a href="{{ url('/page/courses') }}" class="btn anim-button   trans-btn   transition  fl-l"><span>Enter site</span><i class="fa fa-long-arrow-right"></i></a>
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
     </div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" type="text/javascript"></script>
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{ asset('frontend/homepage/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/homepage/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/homepage/js/core.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/homepage/js/scripts.js') }}"></script>
    </body>
</html>
