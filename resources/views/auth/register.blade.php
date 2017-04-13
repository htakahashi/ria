@extends('layouts.pages')

@section('content')
    <article id="main">
        <header>
            <h2>Register</h2>
        </header>
        <section class="wrapper style5">
            <div class="inner">
                <section>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="row uniform">
                            <div class="12u$">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="12u$">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="6u 12u$(xsmall)">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="6u 12u$(xsmall)">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>


                        </div>
                        <div class="btn-center">
                            <button type="submit" class="btn btn-primary special">
                                Register
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </section>
    </article>
@endsection
