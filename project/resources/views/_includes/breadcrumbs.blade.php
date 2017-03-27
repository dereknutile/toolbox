@if (isset($crumbs))
<nav class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            @foreach($crumbs as $name => $url)
            <li><a href="{{ $url }}">{{ $name }}</a></li>
            @endforeach
        </ol>
    </div>
    <!-- /.container -->
</nav>
<!-- /.breadcrumbs -->
@endif
