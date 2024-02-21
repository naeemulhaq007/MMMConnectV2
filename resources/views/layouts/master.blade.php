<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
</head>
<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	@include('layouts.notification')
	<!-- Header -->
	@include('layouts.header')
	<!--/ End Header -->
	@yield('main-content')

	@include('layouts.footer')

</body>
</html>
