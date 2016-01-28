<!DOCTYPE html>
<html lang="en">
<head>
  @include('_includes/head')
</head>

<body class="fixed-top">
    @include('_includes/top_navigation')
    @include('_includes/flash')
    @include('_includes/page_title')

  <div class="page-content">
    <div class="copy-section">
      @yield('content')
    </div>
  </div>

  @include('_includes/footer')
  @include('_includes/scripts')
  @include('_includes/analytics')
</body>
</html>
