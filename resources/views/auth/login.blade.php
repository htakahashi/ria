@extends('layouts.app')

@section('content')

<div class="login-container">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form id="form-login" class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email demo-email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">

                                    <div class="6u 12u$(small)">
                                        <input type="checkbox" id="demo-copy" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="demo-copy">Remember Me</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-4">
                            <ul class="actions">
                                <li><input type="submit" value="Login" class="special" /></li>
                                <a href="{{ route('password.request') }}">
                                    <li><input type="reset" value="Reset" /></li>
                                </a>
                            </ul>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div><!-- End Login Container --> 
@endsection
