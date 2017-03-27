<header>

    @include('_includes/main_navigation')

    @include('_includes/flash')

    @if (isset($page_title))
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">{{ $page_title }}</h1>
            @if (isset($page_subtitle))
            <h2 class="subtitle hidden-xs"><small>{{ $page_subtitle }}</small></h2>
            @endif
        </div>
        <!-- /.container -->
    </section>
    <!-- /.page-header -->
    @endif
</header>
