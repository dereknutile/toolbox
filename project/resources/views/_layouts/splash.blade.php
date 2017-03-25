<!DOCTYPE html>
<html lang="en">

@include('_includes/head')

<body>

    <div class="page-content">
        @yield('content')
    </div>
    <!-- /.page-content -->

    @include('_includes/footer')
    @include('_includes/scripts')
    @include('_includes/analytics')

</body>
</html>
