<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>{{ getSystemSetting('type_name')->value }}</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="hasanik english" />
        <meta name="keywords" content="hasanik english,hasanikway learning" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

        <!-- Theme Styles -->
        <link href="{{ asset('/backend/assets/css/meteor.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/css/layers/dark-layer.css') }}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/backend/assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>

        <script src="{{ asset('/backend/assets/plugins/3d-bold-navigation/js/modernizr.js') }}"></script>


    </head>
    <body class="compact-menu">
        <div class="overlay"></div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
            <h3><span class="pull-left">Messages</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="icon-close"></i></a></h3>
            <div class="slimscroll">
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
            </div>
		</nav>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <h3><span class="pull-left">Michael Lewis</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
            <div class="slimscroll chat">
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Duis aute irure dolor?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Lorem ipsum dolor sit amet, dapibus quis, laoreet et.
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Ut ullamcorper, ligula.
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        In hac habitasse platea dict umst. ligula eu tempor eu id tincidunt.
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Curabitur pretium?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Etiam tempor. Ut tempor! ull amcorper.
                    </div>
                </div>
            </div>
            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>
		</nav>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
          @include('backend.include.nav')
          @include('backend.include.sidebar')
          @yield('content')
        </main><!-- Page Content -->

     <div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
            {{-- Modal goes here --}}
         </div>
       </div>
     </div>

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
        <!-- include summernote css/js -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js">

        <script src="{{ asset('/backend/assets/js/meteor.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/js/pages/table-data.js') }}"></script>
        <script src="{{ asset('/backend/assets/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('/backend/assets/js/custom.js') }}"></script>


    </body>
</html>
