@extends('layouts.pages')

@section('content')
    <article id="main">
        <header>
            <h2>Admin</h2>
        </header>
        <section class="wrapper style5">
            <div class="inner">
                <section>
                    <form class="form-horizontal" role="form" method="POST" action="/admin/update">
                        {{ csrf_field() }}
                        <div class="row uniform">
                            <div class="12u$">
                                <input id="heading-text" type="text" class="form-control" name="heading-text" value="{{ $header }}" placeholder="SPECTRAL" autofocus>
                            </div>
                            <div class="12u$">
                                <input id="headline-text" type="text" class="form-control" name="headline-text-1" value="{{ $headline_1 }}" placeholder="ANOTHER FINE RESPONSIVE" autofocus>
                            </div>
                            <div class="12u$">
                                <input id="headline-text" type="text" class="form-control" name="headline-text-2" value="{{ $headline_2 }}" placeholder="SITE TEMPLATE FREEBIE" autofocus>
                            </div>
                            <div class="12u$">
                                <input id="headline-text" type="text" class="form-control" name="headline-text-3" value="{{ $headline_3 }}" placeholder="CRAFTED BY HTML5 UP." autofocus>
                            </div>
                            <div class="12u$">
                                <input id="button-text" type="text" class="form-control" name="button-text" value="{{ $button }}" placeholder="ACTIVATE" autofocus>
                            </div>
                            <div class="12u$">
                                <input id="action-text" type="text" class="form-control" name="action-text" value="{{ $action }}" placeholder="LEARN MORE" autofocus>
                            </div>
                        </div>
                        <div class="btn-center">
                            <button type="submit" class="btn btn-primary special">
                                UPDATE
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </section>
    </article>
@endsection
