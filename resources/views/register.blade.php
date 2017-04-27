@extends('layouts.form')

@section('form_title')
Register your new account
@endsection

@section('form_action')
/register
@endsection

@section('value')
Register
@endsection

@section('form')
<form method="POST" action="@yield('form_action')">
{{ csrf_field() }}
	<div class="row uniform">
		<div class="6u 12u$(xsmall)">
			<input type="text" name="name" id="demo-name" placeholder="Name" />
		</div>
		<div class="6u 12u$(xsmall)">
			<input type="email" name="email" id="demo-email" placeholder="Email" />
		</div>
		<div class="6u 12u$(xsmall)">
			<input type="password" name="password" id="demo" placeholder="password" />
		</div>
		<div class="6u 12u$(xsmall)">
			<input type="password" name="password_confirmation" id="demo" value="" placeholder="password confirmation" />
		</div>	
		<div class="12u$">
				<button type="submit" class="btn">@yield('value')</button>
				<button type="reset" class="btn">Reset</button>
		</div>
	</div>
</form>
<div class="form-group">
 	@include('layouts.errors')
</div>
@endsection
