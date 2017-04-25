<header id="header">
	<h1><a href="{{ url('/') }}">Spectral</a></h1>
	<nav id="nav">
		<ul>
			<li class="special">
				<a href="#menu" class="menuToggle"><span>Menu</span></a>
				<div id="menu">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						@if (Auth::guest())
							<li><a href="{{ route('register') }}">Register</a></li>
							<li><a href="{{ route('login') }}">Login</a></li>
						@else
							<li><a href="{{ url('/home') }}">My page</a></li>
						@endif
						<li><a href="{{ url('/generic') }}">Generic</a></li>
						<li><a href="{{ url('/elements') }}">Elements</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
</header>