<!-- Header -->
					<header id="header">
						<h1><a href="/">The Boat Project</a></h1>
						<nav id="nav">
							<ul>
								<!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                        @else
                            <li class="dropdown">
                                <a href="/home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                               {{--  <ul class="dropdown-menu" role="menu"> --}}
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                {{-- </ul> --}}
                            </li>
                        @endif
                        <!-- Special Side Pop out Menu-->
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="/">Home</a></li>
											<li><a href="/generic">Generic</a></li>
											<li><a href="/elements">Elements</a></li>
											
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>
