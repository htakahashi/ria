@extends('master')
@section('title')
	Spectral by HTML5 UP
@endsection

@section('body')
<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<h2>{{ $userinfo->firstname }} {{ $userinfo->lastname }}</h2>
			<p>username : {{ $userinfo->username }}</p>
			<p>Email : {{ $userinfo->email }}</p>
		</div>
		<a href="#one" class="more scrolly">Learn More</a>
	</section>

<!-- One -->
	<section id="one" class="wrapper style1 special">
		<div class="inner">
			<header class="major">
				<h2>Arcu aliquet vel lobortis ata nisl<br />
				eget augue amet aliquet nisl cep donec</h2>
				<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
				fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
			</header>
			<ul class="icons major">
				<li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
				<li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
				<li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
			</ul>
		</div>
	</section>

@endsection