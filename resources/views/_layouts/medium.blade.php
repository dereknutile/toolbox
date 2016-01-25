<!DOCTYPE html>
<html lang="en">
<head>
  @include('_includes/head')
</head>

<body>
    <div class="col-sm-1 sidebar admin-sidebar">
        @include('_includes/side_navigation')
    </div><!-- /.admin-sidebar -->

    <div class="col-sm-11 col-sm-offset-1 main">
          @yield('content')
    </div><!-- /.main -->

  @include('_includes/scripts')
  @include('_includes/analytics')
</body>
</html>
