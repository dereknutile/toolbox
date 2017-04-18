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
            <a class="navbar-brand" href="/"><img src="/assets/img/nav-logo.png" class="nav-logo" alt="{{ env('APP_TITLE') }}"></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li{!! (isset($page_active) AND $page_active == 'wo') ? " class='active'" : "" !!}>
                    <a href="/wo"><i class="fa fa-list-alt"></i><span class="hidden-sm">Workorders</span></a>
                </li>
                <li{!! (isset($page_active) AND $page_active == 'docs') ? " class='active'" : "" !!}>
                    <a href="/docs"><i class="fa fa-book"></i><span class="hidden-sm">Documentation</span></a>
                </li>
                <li{!! (isset($page_active) AND $page_active == 'software') ? " class='active'" : "" !!}>
                    <a href="/software"><i class="fa fa-code"></i><span class="hidden-sm">Software</span></a>
                </li>
                <li{!! (isset($page_active) AND $page_active == 'assets') ? " class='active'" : "" !!}>
                    <a href="/assets"><i class="fa fa-barcode"></i><span class="hidden-sm">Assets</span></a>
                </li>
                <li{!! (isset($page_active) AND $page_active == 'keys') ? " class='active'" : "" !!}>
                    <a href="/keys"><i class="fa fa-key"></i><span class="hidden-sm">Keys</span></a>
                </li>
                <li{!! (isset($page_active) AND $page_active == 'directory') ? " class='active'" : "" !!}>
                    <a href="/directory"><i class="fa fa-address-card"></i><span class="hidden-sm">Directory</span></a>
                </li>
                <li class="dropdown{!! (isset($page_active) AND $page_active == 'account') ? " active" : "" !!}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="io-status"><i class="fa fa-user-circle"></i>Derek</span><i class="fa fa-exclamation callout animated animate-a-bit bounce hidden-xs"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-check-square-o"></i><span class="label label-primary">In</span></a></li>
                        <li><a href="#"><i class="fa fa-square-o"></i><span class="label label-warning">Away</span></a></li>
                        <li><a href="#"><i class="fa fa-square-o"></i><span class="label label-danger">Out</span></a></li>
                        <li role="separator" class="divider"></li>
                        <li{!! (isset($page_sub_active) AND $page_sub_active == 'alerts') ? " class='active'" : "" !!}><a href="/alerts/"><i class="fa fa-exclamation-triangle"></i>Alerts&nbsp;<span class="badge">1</span></a></li>
                        <li{!! (isset($page_sub_active) AND $page_sub_active == 'messages') ? " class='active'" : "" !!}><a href="/messages/"><i class="fa fa-comments-o"></i>Messages&nbsp;<span class="badge">7</span></a></li>
                        <li{!! (isset($page_sub_active) AND $page_sub_active == 'account') ? " class='active'" : "" !!}><a href="/account/"><i class="fa fa-tachometer"></i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li{!! (isset($page_sub_active) AND $page_sub_active == 'admin') ? " class='active'" : "" !!}><a href="/admin/"><i class="fa fa-cogs"></i>Administration</a></li>
                        <li{!! (isset($page_sub_active) AND $page_sub_active == 'logs') ? " class='active'" : "" !!}><a href="/admin/logs"><i class="fa fa-list"></i>Logs</a></li>
                        <li{!! (isset($page_sub_active) AND $page_sub_active == 'reports') ? " class='active'" : "" !!}><a href="/admin/reports"><i class="fa fa-bar-chart-o"></i>Reports</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/auth/login/"><i class="fa fa-sign-out"></i>Sign out</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
