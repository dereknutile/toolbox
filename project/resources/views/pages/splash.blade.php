@extends('_layouts/splash')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">{{ env('APP_TITLE') }}</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.hero-body -->
    </section>
    <!-- /.hero -->
@stop
