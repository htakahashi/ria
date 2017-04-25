@extends('master')

@section('title')
    My page
@endsection

@section('body')
    <section id="banner">
        <div class="inner">
            <h2>Hello</h2>
            <p>{{ Auth::user()->name }}</p>
            <ul class="actions">
                <li>
                    <a href="{{ route('logout') }}" class="button special" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </section>
@endsection
