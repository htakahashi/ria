{{-- @extends('layouts.app') --}}
@extends('master')
{{-- @section('content') --}}
@section('title')
    Log in
@endsection

@section('body')
    <article id="main">

        <header>
            <h2>Log in</h2>
        </header>

        <section class="wrapper style5">
            <div class="inner">

                <section>
                    <h4>Log in</h4>

                    <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <div class="row uniform">

                            <div class="12u$ 12u$(xsmall) form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="12u$ 12u$(xsmall) form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="12u$ 12u$(xsmall)">
                                <div>
                                    <button type="submit" class="">
                                        Login
                                    </button>
                                </div>
                                <div>
                                    <a href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </div>

                    </form>
                </section>

            </div>
        </section>

    </article>
@endsection
