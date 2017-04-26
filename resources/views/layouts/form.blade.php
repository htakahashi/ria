<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	@include('partials.head')
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					@include('partials.header')

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Generic Page</h2>
							<p>Aliquam ut ex ut interdum donec amet imperdiet eleifend</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<section>
									<h4>@yield('form_title')</h4>
									@yield('form')
								</section>

							</div>

						</section>

					</article>

					

			</div>

				<!-- Footer -->
				@include('partials.footer')

	</body>
</html>