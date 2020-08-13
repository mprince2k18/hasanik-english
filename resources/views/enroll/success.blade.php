
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="{{ getSystemSetting('type_name')->value }}">
    <title>{{ getSystemSetting('type_name')->value }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ filePath(getSystemSetting('favicon_icon')->value) }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ filePath(getSystemSetting('favicon_icon')->value) }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ filePath(getSystemSetting('favicon_icon')->value) }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ filePath(getSystemSetting('favicon_icon')->value) }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ filePath(getSystemSetting('favicon_icon')->value) }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('enroll/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('enroll/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('enroll/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('enroll/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
	<link href="{{asset('enroll/css/custom.css')}}" rel="stylesheet">
	

	<!-- MODERNIZR MENU -->
	<script src="{{asset('enroll/js/modernizr.js')}}"></script>
  <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav>
		<ul class="cd-primary-nav">
			<li><a href="{{ url('/') }}" class="animated_link">Home</a></li>
			<li><a href="{{ url('/page/about-us') }}" class="animated_link">About Us</a></li>
			<li><a href="{{ url('/page/contact-us') }}" class="animated_link">Contact Us</a></li>
			<li><a href="{{ url('/page/our-team') }}" class="animated_link">Our Team</a></li>
			<li><a href="{{ url('/page/blog') }}" class="animated_link">Blog</a></li>
			<li><a href="{{ url('/page/courses') }}" class="animated_link">Courses</a></li>
		</ul>
	</nav>
	<!-- /menu -->

	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-12">
                <h4 class="text-center mt-5">Hi, You Successfully Submitted The Form.</h4>
                <!-- /content--wrapper -->
                <div class="success_photo text-center">
                    <img src="{{ asset('frontend/success.png') }}" class="img-fluid" style="height: 80vh" alt="#success">
					<div class="row">

						<div class="col-md-6 text-right">
							<form action="{{ url('/pay') }}" method="POST">
								@csrf
								<button type="submit" name="process" class="submit">Pay Now</button>
							</form>
						</div>

						<div class="col-md-6 text-left">
							<a href="{{ route('homepage') }}" class="btn btn-primary">Pay Later</a>
						</div>

					</div>
				</div>
				<!-- /content--wrapper::END -->
			</div>
			<!-- /content-left -->

			
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('enroll/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('enroll/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('enroll/js/velocity.min.js')}}"></script>
	<script src="{{asset('enroll/js/functions.js')}}"></script>

	<!-- Wizard script -->
	<script src="{{asset('enroll/js/survey_func.js')}}"></script>
  <script>
      feather.replace();
    </script>

</body>
</html>
