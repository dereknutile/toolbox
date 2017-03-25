<footer class="footer">
    <div class="container">
        <div>
            <p class="text-center">Copyright &copy; {{ Carbon\Carbon::now()->format('Y') }} &mdash; {{ Config::get('app.app_title') }}</p>
            <p class="text-center">Maintained by <a href="{{ Config::get('app.app_author_url') }}" target="_blank">{{ env('APP_AUTHOR') }}</a> on <a href="{{ Config::get('app.app_repo') }}" target="_blank">Github</a>.</p>
            <p class="text-center">
                <a href="/about">About</a>&nbsp;
                <a href="/contact">Contact</a>
            </p>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.container -->
</footer>
