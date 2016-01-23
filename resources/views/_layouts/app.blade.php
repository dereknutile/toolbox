<!DOCTYPE html>
<html lang="en">
<head>
  @include('_includes/head')
</head>

<body>
    @include('_includes/header')
    @include('_includes/top_navigation')

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
