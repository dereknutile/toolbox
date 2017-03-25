<header>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-shadow-dark" href="{{ route('home') }}">{{ Config::get('app.app_title') }}</a>
            </div>
            @include('_includes/main_navigation')
        </div>
    </nav>

    @include('_includes/flash')

    <section class="header-section">
        <div class="container">
            <h1 class="page-title">{{ Config::get('app.app_title') }}</h1>
            @if (isset($title))
            <h2 class="page-subtitle">{{ $title }}</small></h2>
            @endif
        </div><!-- /.container -->

    </section><!-- /.header-section -->
</header>
