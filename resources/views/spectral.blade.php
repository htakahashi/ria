<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Spectral | Aaron Wilson Final DGM4790</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
   		<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

		
		
		<!-- Include Material Icons to Replace Font Awesome Icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
      	<!--  -->


      	<!-- To Change Google Font -->
      	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Proza+Libre" rel="stylesheet">
      	<!-- -->

      	<link rel="icon" type="image/png" href="/images/logo.png">


	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="/">Spectral</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                                            <li><a href="{{ route('login') }}">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Spectral</h2>
							<p>Final Laravel Project<br />
							by Aaron Wilson<br />
							created for DGM4790 - RIA II.</p>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Improvements Made</h2>
								<p>The main objectives completed for this project include: </p>
								<p>
								[Easy] Replace Font Awesome with Material Icons - https://material.io/icons/ <br />
								[Easy] Brand all images with photos of the same theme <br />
								[Medium] Email icon at bottom of page will open email prompt to send kentakunte@gmail.​com a message <br />
								[Hard] Create a functional sign-up and log in form
								</p>

							</header>
							<ul class="icons major">
								<li><span class="icon fa-laptop major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-code major style2"><span class="label">Ipsum</span></span></li>
								<li><span class="icon fa-code-fork major style3"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
								<h2>Successes</h2>
								<p>Laravel strives to make the entire PHP development experience delightful, including the local development environment. Learning how to use Laravel has been a great accomplishment for me. I had never used a PHP Framework before and now I have a better understanding of how powerful they can be.
</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
								<h2>Obstacles</h2>
								<p>Getting Laravel up and running has been a major obstacle for me this semester. I was not familiar with PHP Frameworks and the learning curve proved to be quite difficult. When I first setup Laravel Homestead I really didn’t know exactly what I was doing and it led to some major problems down the road. After many, many hours of troubleshooting and gaining better insights of how Laravel and Vagrant function, I decided to restart everything from scratch (including a clean install of my Operating System). In the end, it payed off and I sure learned a lot!</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
								<h2>Lessons Learned</h2>
								<p>This semester has taught me a lot about how to troubleshoot issues that will occur when setting up any development environment. Much of the time spent working on projects this semester was dedicated to just that, troubleshooting. Finding new resources and methods I had not thought of before helped me logically debug the issues I had been facing. The lessons I learned this semester will be applicable to all my future coding projects.</p>
							</div>
						</section>
					</section>

				<!-- Three -->
<!-- 					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>Accumsan mus tortor nunc aliquet</h2>
								<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
								fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>

									<ul class="actions">
										<li><a href="#" class="button special icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
									</ul>
						</div>
					</section> -->

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Find Out More</h2>
								<p>Laravel Homestead is an official, pre-packaged Vagrant box that provides you a wonderful development environment without requiring you to install PHP, a web server, and any other server software on your local machine.</p>
							</header>
							<ul class="actions vertical">
								<li><a href="/register" class="button fit special">Sign Up</a></li>
								<li><a href="/login" class="button fit">Log In</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
				<section id="five">
					<footer id="footer">

					<!-- After many many many hours of not being able to use email with Laravel decided on this...  -->
					<form form action="mailto:kentakunte@gmail.​com" method="post" enctype="text/plain">
						<ul class="icons">
							<li><a href="#" class="icon"><i class="zmdi zmdi-twitter"></i></a></li>
							<li><a href="#" class="icon"><i class="zmdi zmdi-facebook"></i></a></li>
							<li><a href="#" class="icon"><i class="zmdi zmdi-instagram"></i></a></li>
							<li><a href="#" class="icon"><i class="zmdi zmdi-dribbble"></i></a></li>
							<li><a href="#five" onclick="$(this).closest('form').submit()" class="icon"><i class="zmdi zmdi-email"></i></a></li>
						</ul>
					</form>

						<ul class="copyright">
							<li>2017 &copy; Aaron Wilson </li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
				</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>