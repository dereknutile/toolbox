<header>

    @include('_includes/main_navigation')

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
