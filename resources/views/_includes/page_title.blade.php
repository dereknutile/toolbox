@if (strlen(Config::get('app.site_title') > 0))
    <section class="header-section">
      <div class="container pre-post-padding">
        <h1 class="page-title">{{ Config::get('app.site_title') }}</h1>
        @if (isset($title))
        <h2 class="page-subtitle">{{ $title }}</small></h2>
        @endif
      </div><!-- /.container -->
    </section><!-- /.header-section -->
@endif
