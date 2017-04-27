@extends('layouts.form')

@section('form_title')
Login
@endsection

@section('form_action')
/login
@endsection

@section('value')
Login
@endsection

@section('form')
<form method="post" action="@yield('form_action')">
{{ csrf_field() }}
	<div class="row uniform">
		<div class="6u$ 12u$(xsmall)">
			<input type="text" name="name" id="demo-name" value="" placeholder="username" />
		</div>
		<div class="6u 12u$(xsmall)">
			<input type="email" name="password" id="demo-email" value="" placeholder="password" />
		</div>
		<div class="12u$">
			<ul class="actions">
				<li><input type="submit" value="@yield('value')" class="special" /></li>
				<li><input type="reset" value="Reset" /></li>
			</ul>
		</div>
	</div>
</form>
@endsection