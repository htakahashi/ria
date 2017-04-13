@extends('layouts.pages')

@section('content')
    <article id="main">
        <header>
            <h2>Log In</h2>
        </header>
        <section class="wrapper style5">
            <div class="inner">
                <section>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="row uniform">
                            <div class="6u 12u$(xsmall)">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="6u 12u$(xsmall)">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="6u 12u$(xsmall)">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="remember">
                                <label for="remember">Remember Me</label>
                            </div>

                        </div>
                        <div class="btn-center">
                            <button type="submit" class="special">
                                Register
                            </button>
                        </div>
                        <div class="btn-center">
                            <button class="button" href="{{ route('password.request') }}">
                                Forgot Password?
                            </button>
                        </div>
                        </div>
                    </form>
                </section>
                </div>
        </section>
    </article>
@endsection
