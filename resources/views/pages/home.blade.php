@extends('_layouts/app')

@section('content')

<?php
if (Auth::check()) {
    echo "<h1>Logged in: ". Auth::user()->first ."</h1>";
}else {
    echo "<h1>Not Logged in</h1>";
}
?>

<nav class="navbar navbar-fixed-top main-navbar">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="assets/img/logo-no-text.png" class="img-responsive" />&nbsp;toolbox</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-cogs"></i>&nbsp;My Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i>&nbsp;Sign-out</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-key"></i>&nbsp;Keys &amp; Passwords</a></li>
                        <li><a href="#"><i class="fa fa-info-circle"></i>&nbsp;Knowledgebase</a></li>
                        <li><a href="#"><i class="fa fa-check-square-o"></i>&nbsp;Task &amp; Project Management</a></li>
                        <li><a href="#"><i class="fa fa-cloud-upload"></i>&nbsp;Cloud Tools</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container fixed-top">
    <div class="row app-buttons">
        <div class="col-xs-6 col-sm-3">
          <a href="app.html" class="btn btn-default app-button" title="Keys &amp; Passwords"><i class="fa fa-key"></i></a>
        </div>
        <div class="col-xs-6 col-sm-3">
          <a href="app.html" class="btn btn-default app-button" title="Knowledgebase"><i class="fa fa-info-circle"></i></a>
        </div>
        <div class="col-xs-6 col-sm-3">
          <a href="app.html" class="btn btn-default app-button" title="Task &amp; Project Management"><i class="fa fa-check-square-o"></i></a>
        </div>
        <div class="col-xs-6 col-sm-3">
          <a href="app.html" class="btn btn-default app-button" title="Cloud Tools"><i class="fa fa-cloud-upload"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped data-table">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Title</th>
                  <th>Edited</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="app.html">Knowledgebase</a></td>
                  <td><a href="app.html">Read the manual</a></td>
                  <td>2015-07-16</td>
                </tr>
                <tr>
                  <td><a href="app.html">Keys</a></td>
                  <td><a href="app.html">Test key item</a></td>
                  <td>2015-07-19</td>
                </tr>
                <tr>
                  <td><a href="app.html">Keys</a></td>
                  <td><a href="app.html">Secret sauce</a></td>
                  <td>2015-07-19</td>
                </tr>
                <tr>
                  <td><a href="app.html">Cloud</a></td>
                  <td><a href="app.html">AWS/S3</a></td>
                  <td>2015-07-19</td>
                </tr>
                <tr>
                  <td><a href="app.html">Knowledgebase</a></td>
                  <td><a href="app.html">How to do something.</a></td>
                  <td>2015-07-19</td>
                </tr>
                <tr>
                  <td><a href="app.html">Knowledgebase</a></td>
                  <td><a href="app.html">How not to do something bad.</a></td>
                  <td>2015-07-19</td>
                </tr>
              </tbody>
            </table>
         </div>
    </div>
</div>

@stop
