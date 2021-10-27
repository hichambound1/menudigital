<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
	<meta name="keywords" content="aerobic, athletics, body building, boxing, crossfit, danceing, Fitlab, fitness, fitness center, gym, health, sports, yoga">
	<meta name="author" content="unicoder">

    <!--	Css Links -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/default-animation.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}">

	<!-- Google Fonts Documentation link
	https://developers.google.com/fonts/docs/getting_started  -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i">

    <!--	Title   -->
	<title>Trainers.ma</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
</head>
<body>
	<div class="theme-loader">
		<div id="ajaxbar1">
		  <div id="block1" class="barlittle"></div>
		  <div id="block2" class="barlittle"></div>
		  <div id="block3" class="barlittle"></div>
		  <div id="block4" class="barlittle"></div>
		  <div id="block5" class="barlittle"></div>
		</div>
	</div>
@include('includes.header')
@yield('content')
@include('includes.footer')
<!--	js Links	-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/greensock.js')}}"></script>
<script src="{{asset('js/layerslider.transitions.js')}}"></script>
<script src="{{asset('js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/mixitup.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('js/jquery.magnify.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
