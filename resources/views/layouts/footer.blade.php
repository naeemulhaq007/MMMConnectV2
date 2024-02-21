<style>
    @charset "UTF-8";

.rounded-social-buttons {
  text-align: left;
}

.rounded-social-buttons .social-button {
  display: inline-block;
  position: relative;
  cursor: pointer;
  width: 2.125rem;
  height: 2.125rem;
  border: 0.125rem solid transparent;
  padding: 0;
  text-decoration: none;
  text-align: center;
  color: #fefefe;
  font-size: 1.0rem;
  font-weight: normal;
  line-height: 2em;
  border-radius: 1.6875rem;
  transition: all 0.5s ease;
  margin-right: 0.25rem;
  margin-bottom: 0.25rem;
}

.rounded-social-buttons .social-button:hover, .rounded-social-buttons .social-button:focus {
  -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
          transform: rotate(360deg);
}

.rounded-social-buttons .social-button.facebook {
  background: #3b5998;
}

.rounded-social-buttons .social-button.facebook:before {
  font-family: "FontAwesome";
  content: "";
}

.rounded-social-buttons .social-button.facebook:hover, .rounded-social-buttons .social-button.facebook:focus {
  color: #3b5998;
  background: #fefefe;
  border-color: #3b5998;
}

.rounded-social-buttons .social-button.twitter {
  background: #55acee;
}

.rounded-social-buttons .social-button.twitter:before {
  font-family: "FontAwesome";
  content: "";
}

.rounded-social-buttons .social-button.twitter:hover, .rounded-social-buttons .social-button.twitter:focus {
  color: #55acee;
  background: #fefefe;
  border-color: #55acee;
}

.rounded-social-buttons .social-button.linkedin {
  background: #007bb5;
}

.rounded-social-buttons .social-button.linkedin:before {
  font-family: "FontAwesome";
  content: "";
}

.rounded-social-buttons .social-button.linkedin:hover, .rounded-social-buttons .social-button.linkedin:focus {
  color: #007bb5;
  background: #fefefe;
  border-color: #007bb5;
}

.rounded-social-buttons .social-button.youtube {
  background: #bb0000;
}

.rounded-social-buttons .social-button.youtube:before {
  font-family: "FontAwesome";
  content: "";
}

.rounded-social-buttons .social-button.youtube:hover, .rounded-social-buttons .social-button.youtube:focus {
  color: #bb0000;
  background: #fefefe;
  border-color: #bb0000;
}

.rounded-social-buttons .social-button.instagram {
  background: #125688;
}

.rounded-social-buttons .social-button.instagram:before {
  font-family: "FontAwesome";
  content: "";
}

.rounded-social-buttons .social-button.instagram:hover, .rounded-social-buttons .social-button.instagram:focus {
  color: #125688;
  background: #fefefe;
  border-color: #125688;
}

.rounded-social-buttons .social-button.pinterest {
  background: #cb2027;
}

.rounded-social-buttons .social-button.pinterest:before {
  font-family: "FontAwesome";
  content: "";
}

.rounded-social-buttons .social-button.pinterest:hover, .rounded-social-buttons .social-button.pinterest:focus {
  color: #cb2027;
  background: #fefefe;
  border-color: #cb2027;
}

.rounded-social-buttons .social-button.google-plus {
  background: #dd4b39;
}

.rounded-social-buttons .social-button.google-plus:before {
  font-family: "FontAwesome";
  content: "";
}

.rounded-social-buttons .social-button.google-plus:hover, .rounded-social-buttons .social-button.google-plus:focus {
  color: #dd4b39;
  background: #fefefe;
  border-color: #dd4b39;
}

.rounded-social-buttons .social-button.github {
  background: #000000;
}

.rounded-social-buttons .social-button.github:before {
  font-family: "FontAwesome";
  content: "";
}

.rounded-social-buttons .social-button.github:hover, .rounded-social-buttons .social-button.github:focus {
  color: #000000;
  background: #fefefe;
  border-color: #000000;
}

.rounded-social-buttons .social-button.tumblr {
  background: #32506d;
}

.rounded-social-buttons .social-button.tumblr:before {
  font-family: "FontAwesome";
  content: "";
}

.rounded-social-buttons .social-button.tumblr:hover, .rounded-social-buttons .social-button.tumblr:focus {
  color: #32506d;
  background: #fefefe;
  border-color: #32506d;
}


</style>
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="{{asset('backend/img/logo-300.png')}}" style=" width: 80%; " alt="#"></a>
							</div>
							{{-- @php
								$settings=DB::table('settings')->get();
							@endphp
							<p class="text">@foreach($settings as $data) {{$data->short_des}} @endforeach</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">@foreach($settings as $data) {{$data->phone}} @endforeach</a></span></p> --}}
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								{{-- <li><a href="{{route('about-us')}}">About Us</a></li> --}}
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								{{-- <li><a href="{{route('contact')}}">Contact Us</a></li> --}}
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								{{-- <li><a href="#">Payment Methods</a></li> --}}
								{{-- <li><a href="#">Money-back</a></li> --}}
								{{-- <li><a href="#">Returns</a></li> --}}
								{{-- <li><a href="#">Shipping</a></li> --}}
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Touch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									{{-- <li>@foreach($settings as $data) {{$data->address}} @endforeach</li>
									<li>@foreach($settings as $data) {{$data->email}} @endforeach</li>
									<li>@foreach($settings as $data) {{$data->phone}} @endforeach</li> --}}
								</ul>
							</div>
							<!-- End Single Widget -->
							{{-- <div class="sharethis-inline-follow-buttons"></div> --}}
                            <div class="rounded-social-buttons">
                                <a class="social-button facebook" href="#"></a>
                                <a class="social-button twitter" href="#"></a>
                                <a class="social-button linkedin" href="#"></a>
                                <a class="social-button instagram" href="#"></a>
                              </div>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © {{date('Y')}} Zofatech.All Rights Reserved.</p>
							</div>
						</div>
						{{-- <div class="col-lg-6 col-12">
							<div class="right">
								<img src="{{asset('backend/img/payments.png')}}" alt="#">
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->

	<!-- Jquery -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	{{-- <script src="{{asset('frontend/js/colors.js')}}"></script> --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

	<!-- Slicknav JS -->
	<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('frontend/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
	{{-- Isotope --}}
	<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('frontend/js/easing.js')}}"></script>

	<!-- Active JS -->
	<script src="{{asset('frontend/js/active.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	@stack('scripts')
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	  </script>
