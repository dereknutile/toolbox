
<nav class="navbar navbar-fixed-top main-navbar">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('root') }}"><img src="assets/img/logo-no-text.png" class="img-responsive" />&nbsp;toolbox</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('profile') }}"><i class="fa fa-cogs"></i>&nbsp;{{ Auth::user()->first }} {{ Auth::user()->last}}</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out"></i>&nbsp;Sign-out</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('keys') }}"><i class="fa fa-key"></i>&nbsp;Keys &amp; Passwords</a></li>
                        <li><a href="{{ route('kb') }}"><i class="fa fa-info-circle"></i>&nbsp;Knowledgebase</a></li>
                        <li><a href="{{ route('tasks') }}"><i class="fa fa-check-square-o"></i>&nbsp;Task &amp; Project Management</a></li>
                        <li><a href="{{ route('cloud') }}"><i class="fa fa-cloud-upload"></i>&nbsp;Cloud Tools</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
