<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ env("APP_NAME") }}</title>


        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="">
        <div class="container">
            <div class="col-8 offset-2 ">
                <div class="mt-5">
                    <div class="card mt-lg-5 p-3">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="{{asset('backEnd/plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('backEnd/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</html>
