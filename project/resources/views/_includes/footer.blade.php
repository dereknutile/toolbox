<footer class="footer">
    <div class="container">
        <div>
            <p class="text-center">Copyright &copy; {{ Carbon\Carbon::now()->format('Y') }} &mdash; {{ env('APP_TITLE') }}</p>
            <p class="text-center">Maintained by <a href="{{ env('APP_AUTHOR_URL') }}" target="_blank">{{ env('APP_AUTHOR') }}</a> on <a href="{{ env('APP_REPO') }}" target="_blank">Github</a>.</p>
            <p class="text-center">
                <a href="/about">About</a>&nbsp;
                <a href="/contact">Contact</a>
            </p>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.container -->
</footer>
