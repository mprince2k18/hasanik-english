<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Soyuz is a bootstrap 4x + laravel admin dashboard template">
    <meta name="keywords"
          content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, laravel, clean, crm, ecommerce, hospital, responsive, rtl, sass support, ui kits">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ filePath(getSystemSetting('favicon_icon')->value) ?? asset('assets/images')}}/favicon.ico') }}">
    <!-- Start CSS -->
    @yield('style')
    @include('dashboard.layouts.include.style')
</head>
<body class="vertical-layout">

    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="264398960274353">
      </div>

      
<!-- Start Infobar Setting Sidebar -->
<div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
    <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
        <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img
                src="{{asset('assets/images')}}/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
    </div>
    <div class="infobar-settings-sidebar-body">
        <div class="custom-mode-setting">
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">New Order Notification</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Low Stock Alerts</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Vacation Mode</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third"/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Order Tracking</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Show Review</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth"/></div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-8"><h6 class="mb-0">Enable Wallet</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked/></div>
            </div>
            <div class="row align-items-center">
                <div class="col-8"><h6 class="mb-0">Sales Report</h6></div>
                <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked/></div>
            </div>
        </div>
        <div class="custom-layout-setting">
            <div class="row align-items-center pb-3">
                <div class="col-12">
                    <h6 class="mb-3">Select Account</h6>
                </div>
                <div class="col-6">
                    <div class="account-box active">
                        <img src="{{asset('assets/images')}}/users/boy.svg" class="img-fluid" alt="user">
                        <h5>John</h5>
                        <p>CEO</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="account-box">
                        <img src="{{asset('assets/images')}}/users/women.svg" class="img-fluid" alt="user">
                        <h5>Kate</h5>
                        <p>COO</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="account-box">
                        <img src="{{asset('assets/images')}}/users/men.svg" class="img-fluid" alt="user">
                        <h5>Mark</h5>
                        <p>MD</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="account-box">
                        <p class="dash-analytic-icon"><i class="feather icon-plus font-35"></i></p>
                        <h5>Add</h5>
                        <p>ACCOUNT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="infobar-settings-sidebar-overlay"></div>
<!-- End Infobar Setting Sidebar -->
<!-- Start Containerbar -->

    <!-- Start Leftbar -->
@include('dashboard.layouts.leftbar')
<!-- End Leftbar -->
<div class="rightbar">
@include('dashboard.layouts.include.top')
@yield('main-content')
@include('dashboard.layouts.include.footer')
</div>

@include('dashboard.layouts.include.model')
@include('dashboard.layouts.include.delete')
<!-- End Containerbar -->
<!-- Start JS -->
@include('dashboard.layouts.include.script')
@yield('script')
<!-- End JS -->
<!--alert-->
@include('sweetalert::alert')
</body>
</html>
