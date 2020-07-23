
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

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
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="{{ url('/') }}" id="logo"><img src="img/logo.png" alt="" width="49" height="35"></a>
					<div id="social">
						<ul>
							<li><a href="#0"><i class="icon-facebook"></i></a></li>
							<li><a href="#0"><i class="icon-twitter"></i></a></li>
							<li><a href="#0"><i class="icon-google"></i></a></li>
							<li><a href="#0"><i class="icon-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->
					<div>
						<figure><img src="img/info_graphic_1.svg" alt="" class="img-fluid"></figure>
						<h2>Learn English Through <br> Hasanik Way</h2>
						<h6 class="text-white">Event Timing: Sunday & Wednesday</h6>
						<h6 class="text-white">Event Address: Online</h6>
						<h6 class="text-white">Contact us at 01720305089 & 01913088433</h6>
						<h6 class="text-white">To know more about the course in details please call the above numbers.</h6>
					</div>
					<div class="copy">© {{ Carbon\Carbon::now()->year }} {{ env('APP_NAME') }}</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form action="{{ route('enroll.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question"><strong>1/5</strong>
                    {{ $questions->question_en_1 ?? '' }}[ {{ $questions->question_bn_1 ?? '' }} ]
                  </h3>
									<div class="form-group">
										<input type="text" name="name" class="form-control required" placeholder="Full Name">
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control required" placeholder="Your Email">
									</div>
									<div class="form-group">
										<input type="number" name="phone" class="form-control required" placeholder="Contact Number">
									</div>
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="occupation_id">
												<option value="">Your Occupation</option>
                        @foreach ($occupations as $occupation)
                          <option value="{{ $occupation->id }}">{{ $occupation->name }}</option>
                        @endforeach

											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											<div class="form-group">
												<input type="text" name="age" class="form-control" placeholder="Age">
											</div>
										</div>
										<div class="col-9">
											<div class="form-group radio_input">
												<label class="container_radio">Male
													<input type="radio" name="gender" value="Male" class="required">
													<span class="checkmark"></span>
												</label>
												<label class="container_radio">Female
													<input type="radio" name="gender" value="Female" class="required">
													<span class="checkmark"></span>
												</label>
											</div>
										</div>
									</div>
									<!-- /row -->
									<div class="form-group terms">
										<label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
											<input type="checkbox" name="terms" value="Yes" class="required">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question">
                    <strong>2/5</strong>
                    {{ $questions->question_en_2 ?? ''}} [ {{ $questions->question_bn_2 ?? ''}} ]
                  </h3>
                  <div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="course_id">
												<option value="">Select Course</option>
												<option value="1">English two</option>
												<option value="2">English Three</option>
												<option value="3">English Four</option>
												<option value="4">English Five</option>
											</select>
										</div>
									</div>
									<h3 class="main_question">
                    {{ $questions->question_en_3 ?? ''}} [ {{ $questions->question_bn_3 ?? ''}} ]
                  </h3>
                  @foreach ($schedules as $schedule)
                    <div class="form-group">
                      <label class="container_radio version_2">{{ $schedule->name }}
                        <input type="radio" name="schedule_id" value="{{ $schedule->id }}" class="required" onchange="getVals(this, 'question_{{$schedule->id}}');">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  @endforeach


								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>3/5</strong>
                    {{ $questions->question_en_4 ?? ''}} [ {{ $questions->question_bn_4 ?? ''}} ]
                  </h3>
                  @foreach ($payments as $payment)
                    <div class="form-group">
                      <label class="container_radio version_2">{{ $payment->name }}
                        <input type="radio" name="payment_id" value="{{ $payment->id }}" class="required" onchange="getVals(this, 'question_{{ $payment->id }}');">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  @endforeach

								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>4/5</strong>
                    {{ $questions->question_en_5 ?? ''}} [ {{ $questions->question_bn_5 ?? ''}} ]
                    </h3>
                    <div class="form-group">
                      <textarea name="description" class="form-control required" rows="10" placeholder="Write about yourself and why you want to do the course?"></textarea>
                    </div>
								</div>
								<!-- /step-->
								<div class="submit step">
									<h3 class="main_question"><strong>5/5</strong>Attention!</h3>
									<div class="summary">
										Before submitting the application please make sure you wrote all the informations correctly.
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Prev</button>
								<button type="button" name="forward" class="forward">Next</button>
								<button type="submit" name="process" class="submit">Submit</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
			</div>
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

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('enroll/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('enroll/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('enroll/js/velocity.min.js')}}"></script>
	<script src="{{asset('enroll/js/functions.js')}}"></script>

	<!-- Wizard script -->
	<script src="{{asset('enroll/js/survey_func.js')}}"></script>
  <script>
      feather.replace()
    </script>

</body>
</html>