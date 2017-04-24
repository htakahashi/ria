<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.css"/>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="spectral.blade.php">Spectral</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="/">Home</a></li>
											<li><a href="/reports">Reports</a></li>
											<li><a href="/generic">Generic</a></li>
											<li><a href="/elements">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="reports">
						<div style="width: 50%; margin: 0 auto;">
							<table id="subcriptions_table">
								<thead>
									<tr>
										<td style="border-bottom: 1px solid #000000;">Username</td>
										<td style="border-bottom: 1px solid #000000;">Enroll Date</td>
										<td style="border-bottom: 1px solid #000000;">Active Subscription</td>
									</tr>
								</thead>
								<tbody>
									@foreach( $subscriptions as $subscription)
										<tr>
											<td>{{ $subscription -> username }}</td>
											<td>{{ $subscription -> enroll_date }}</td>
											<td>{{ $subscription -> subscription_active }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon"><i class="material-icons">mail_outline</i></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/v/zf-5.5.2/dt-1.10.15/datatables.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>
			<script>
				var $dataTable = $("#subcriptions_table");
				
				$(document).ready(function(){
					$dataTable.DataTable( {
						"paging":   true,
						"pageLength": 20,
						"lengthChange": false
					});
				});
			</script>
	</body>
</html>