<!doctype html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Eric Berg // Web Developer</title>
	<meta name="description" content="This is the professional site of Eric Berg, where you can find out what he's been working on lately.">
	<meta name="author" content="Eric Berg">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	{{ HTML::style('css/base.css') }}
	{{ HTML::style('css/skeleton.css') }}
	{{ HTML::style('css/layout.css') }}

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Web Fonts
  	================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,900' rel='stylesheet' type='text/css'>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>



	<!-- Header Layout
	================================================== -->

	<div class="header">
		<div class="sixteen columns">
		<div class="container">
		<div id="logo">
			<img src='/img/logo.png' alt='Circles and Hexagons' width='72' height='86'/></div>
		<div class="leftfloat"><h1 id="myname"> ERIC BERG </h1></div>
		<div class="leftfloat"><h2 id="tagline"><span style="margin:0px 10px;">//</span>web engineer</h2></div>
		</div>
		</div>
	</div>

	<!-- Navbar Layout
	================================================== -->

	<div class="navbar">
		<div class="container">
			<div class="sixteen columns">
				<div class= "navbar-link" style="padding-left: 0;">
					<a href="{{URL::to_route('home')}}">
					<h3>Home</h3>
					<h4 class="navbar-sub">sweet home</h4>
					</a>
					<?php if(Request::route()->action['as']=='home'){echo '<div id="nav-selection-image"></div>';}?>
				</div>
				<div class="navbar-separator"></div>
				<div class= "navbar-link">
					<a href="{{URL::to_route('tech')}}">
					<h3>Technology</h3>
					<h4 class="navbar-sub">I'm using</h4>
					</a>
					<?php if(Request::route()->action['as']=='tech'){echo '<div id="nav-selection-image"></div>';}?>
				</div>
				<div class="navbar-separator"></div>
				<div class= "navbar-link">
					<a href="{{URL::to_route('about')}}">
					<h3>About</h3>
					<h4 class="navbar-sub">me</h4>
					</a>
					<?php if(Request::route()->action['as']=='about'){echo '<div id="nav-selection-image"></div>';}?>
				</div>
				<div class="navbar-separator"></div>
				<div class= "navbar-link">
					<a href="{{URL::to_route('contact')}}">
					<h3>Contact</h3>
					<h4 class="navbar-sub">by email</h4>
					</a>
					<?php if(Request::route()->action['as']=='contact'){echo '<div id="nav-selection-image"></div>';}?>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Layout
	================================================== -->

	@yield('content')
	
	@section('js')
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/underscore.js') }}
	{{ HTML::script('js/backbone/backbone.js') }}
	@yield_section
<!-- End Document ================================================== -->
</body>
</html>