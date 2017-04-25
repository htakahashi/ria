<!DOCTYPE HTML>
<html>
	<head>
		<title>@yield('title') - Spectral by HTML5 UP</title>
		@include('layout.header')
	</head>

	<body>
		<div id="page-wrapper">
			@include('layout.nav')
			@yield('body')
			@include('layout.footer')
		</div>
		@include('layout.script')
	</body>
</html>
