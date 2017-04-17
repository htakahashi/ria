@extends('layouts.main')
@section('content')
<!-- Banner -->
<section id="banner">
	<div class="inner">
		<h2>{{$header}}</h2>
		<p>{{$headline_1}}<br />
			{{$headline_2}}<br />
			{{$headline_3}}</p>
		<ul class="actions">
			<li><a href="#" class="button special">{{$button}}</a></li>
		</ul>
	</div>
	<a href="#one" class="more scrolly">{{$action}}</a>
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

<!-- Two -->
<section id="two" class="wrapper alt style2">
	<section class="spotlight">
		<div class="image"><img src="img/penguin1.jpg" alt="" /></div><div class="content">
			<h2>Magna primis lobortis<br />
				sed ullamcorper</h2>
			<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
		</div>
	</section>
	<section class="spotlight">
		<div class="image"><img src="img/penguin2.jpg" alt="" /></div><div class="content">
			<h2>Tortor dolore feugiat<br />
				elementum magna</h2>
			<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
		</div>
	</section>
	<section class="spotlight">
		<div class="image"><img src="img/penguin3.jpg" alt="" /></div><div class="content">
			<h2>Augue eleifend aliquet<br />
				sed condimentum</h2>
			<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
		</div>
	</section>
</section>

<!-- Three -->
<section id="three" class="wrapper style3 special">
	<div class="inner">
		<header class="major">
			<h2>Accumsan mus tortor nunc aliquet</h2>
			<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
				fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
		</header>
		<ul class="features">
			<li class="icon fa-paper-plane-o">
				<h3>Arcu accumsan</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
			<li class="icon fa-laptop">
				<h3>Ac Augue Eget</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
			<li class="icon fa-code">
				<h3>Mus Scelerisque</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
			<li class="icon fa-headphones">
				<h3>Mauris Imperdiet</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
			<li class="icon fa-heart-o">
				<h3>Aenean Primis</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
			<li class="icon fa-flag-o">
				<h3>Tortor Ut</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
		</ul>
	</div>
</section>

<!-- CTA -->
<section id="cta" class="wrapper style4">
	<div class="inner">
		<header>
			<h2>WANT TO BE AN ADMIN?</h2>
			<p>It's just $5,000 a year!</p>
		</header>
		<ul class="actions vertical">
			<li><form action="" method="POST">
					{{ csrf_field() }}
					<script
							src="https://checkout.stripe.com/checkout.js" class="stripe-button"
							data-key="pk_test_F0djliWgtTE5noZ2UWMu0tzO"
							data-amount="500000"
							data-name="SPECTRAL"
							data-description="Admin Access"
							data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
							data-locale="auto">
					</script>
				</form></li>
		</ul>
	</div>
</section>
@endsection