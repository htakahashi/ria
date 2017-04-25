{{-- @extends('layouts.app') --}}
@extends('master')

@section('title')
    Sign up
@endsection

@section('body')
{{-- @section('content') --}}
    <article id="main">
        <header>
            <h2>Sign Up</h2>
        </header>
        <section class="wrapper style5">
            <div class="inner">
                <section>
                    <h4>Sign Up</h4>
                    <form role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="row uniform">
                            <div class="12u$ 12u$(xsmall) form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="12u$ 12u$(xsmall) form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="6u 12u$(xsmall)">
                                <input id="password" type="password" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="6u$ 12u$(xsmall)">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>

                            <div class="12u$ 12u$(xsmall)">
                                <button type="submit" class="special">
                                    Register
                                </button>
                            </div>
                        </div>

                    </form>

                </section>
            </div>
        </section>
    </article>
@endsection
