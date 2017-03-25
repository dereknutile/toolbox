<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <i class="fa fa-exclamation callout animated animate-a-bit bounce"></i>
            </button>
            <a class="navbar-brand" href="/"><img src="/assets/img/nav-logo.png" class="nav-logo" alt="{{ Config::get('app.app_title') }}"></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="" href="/apps/wo"><i class="fa fa-list-alt"></i><span class="hidden-sm">Workorders</span></a>
                </li>
                <li>
                    <a class="" href="/apps/docs"><i class="fa fa-book"></i><span class="hidden-sm">Documentation</span></a>
                </li>
                <li>
                    <a class="" href="/apps/software"><i class="fa fa-code"></i><span class="hidden-sm">Software</span></a>
                </li>
                <li>
                    <a class="" href="/apps/assets"><i class="fa fa-barcode"></i><span class="hidden-sm">Assets</span></a>
                </li>
                <li>
                    <a class="" href="/apps/keys"><i class="fa fa-key"></i><span class="hidden-sm">Keys</span></a>
                </li>
                <li>
                    <a class="" href="/apps/directory"><i class="fa fa-address-card"></i><span class="hidden-sm">Directory</span></a>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
