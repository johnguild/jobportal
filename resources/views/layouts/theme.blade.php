<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  @yield('meta')

  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('portal/css/linearicons.css')}}">
  <link rel="stylesheet" href="{{asset('portal/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('portal/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('portal/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('portal/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('portal/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('portal/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('portal/css/main.css')}}">

  @yield('stylesheet')

  <!-- Scripts -->
  <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
  </script>
</head>
<body>
  @yield('content')

  @include('modal.modalb4')

  <!-- Scripts -->
  <script src="{{asset('portal/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="{{asset('portal/js/vendor/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="{{asset('portal/js/easing.min.js')}}"></script>
	<script src="{{asset('portal/js/hoverIntent.js')}}"></script>
	<script src="{{asset('portal/js/superfish.min.js')}}"></script>
	<script src="{{asset('portal/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('portal/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('portal/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('portal/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('portal/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('portal/js/parallax.min.js')}}"></script>
	<script src="{{asset('portal/js/mail-script.js')}}"></script>
	<script src="{{asset('portal/js/main.js')}}"></script>


  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  @yield('script')

  @include('modal.modalb4_script')
</body>
</html>
