@extends('layouts.form')

@section('form_title')
Register your new account
@endsection


@section('form')
<form method="post" action="@yield('form_action')">
{{ csrf_field() }}
	<div class="row uniform">
		<div class="6u 12u$(xsmall)">
			<input type="text" name="@yield('form_name')" id="demo-name" value="" placeholder="Name" />
		</div>
		<div class="6u 12u$(xsmall)">
			<input type="email" name="@yield('form_email')" id="demo-email" value="" placeholder="Email" />
		</div>
		<div class="6u 12u$(xsmall)">
			<input type="email" name="@yield('form_password')" id="demo-email" value="" placeholder="password" />
		</div>
		<div class="6u$ 12u$(xsmall)">
			<input type="email" name="@yield('form_password_c')" id="demo-email" value="" placeholder="password confirmation" />
		</div>
					
		<div class="12u$">
			<ul class="actions">
				<li><input type="submit" value="Send Message" class="special" /></li>
				<li><input type="reset" value="Reset" /></li>
			</ul>
		</div>
	</div>
</form>
@endsection