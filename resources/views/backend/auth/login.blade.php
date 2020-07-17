
<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>{{ env('APP_NAME') }} | Login - Sign in</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />

        <!-- Styles -->
        <link href="{{ asset('/backend/assets/plugins/pace-master/themes/blue/pace-theme-flash.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/backend/assets/plugins/uniform/css/default.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/plugins/fontawesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/plugins/line-icons/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/plugins/waves/waves.min.css" rel="stylesheet') }}" type="text/css"/>
        <link href="{{ asset('/backend/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/plugins/3d-bold-navigation/css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/plugins/slidepushmenus/css/component.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/plugins/weather-icons-master/css/weather-icons.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/plugins/datatables/css/jquery.datatables.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="{{ asset('/backend/assets/css/meteor.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/css/layers/dark-layer.css') }}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>

        <script src="{{ asset('/backend/assets/plugins/3d-bold-navigation/js/modernizr.js') }}"></script>



    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="panel panel-white" id="js-alerts">
                                <div class="panel-body">
                                    <div class="login-box">
                                        <a href="#" class="logo-name text-lg text-center m-t-xs">Hasanik Learning</a>
                                        <p class="text-center m-t-md">Please login into your account.</p>
                                        <form class="m-t-md" action="{{ route('login') }}" method="post">
                                          @csrf
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="admin@mail.com" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" value="12345678" class="form-control password" placeholder="Password" required>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block">Login</button>
                                            <a href="forgot.html" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                            <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                            <a href="register.html" class="btn btn-default btn-block m-t-md">Create an account</a>
                                        </form>
                                        <p class="text-center m-t-xs text-sm">{{ Carbon\Carbon::now()->year }} &copy; {{ env('APP_NAME') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->


        <!-- Javascripts -->
        <script src="{{ asset('/backend/assets/plugins/jquery/jquery-3.1.0.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/pace-master/pace.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/jquery-blockui/jquery.blockui.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/switchery/switchery.min.jsv') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/uniform/js/jquery.uniform.standalone.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/offcanvasmenueffects/js/classie.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/waves/waves.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/3d-bold-navigation/js/main.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/flot/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/curvedlines/curvedLines.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/chartjs/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/plugins/datatables/js/jquery.datatables.min.js') }}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>

        <script src="{{ asset('/backend/assets/js/meteor.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/js/pages/table-data.js') }}"></script>
        <script src="{{ asset('/backend/assets/js/pages/dashboard.js') }}"></script>

    </body>
</html>
