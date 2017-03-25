<!DOCTYPE html>
<html lang="en">

@include('_includes/head')

<body class="fixed-navbar">

    @include('_includes/header')

    <div class="page-content">
        @yield('content')
    </div>
    <!-- /.page-content -->

    @include('_includes/footer')
    @include('_includes/scripts')
    @include('_includes/analytics')

</body>
</html>
