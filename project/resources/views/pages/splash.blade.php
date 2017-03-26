@extends('_layouts/splash')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">{{ env('APP_TITLE') }} Non-Authenticated Landing Page</h1>
                <p>Note: The dashboard will become the landing page when authentication is wired up.</p>
                <p><a href="/dashboard">Enter</a></p>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.hero-body -->
    </section>
    <!-- /.hero -->
@stop
