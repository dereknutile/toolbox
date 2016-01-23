@extends('_layouts/main')

@section('content')
<nav class="navbar admin-navbar">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Page Title</a>
        </div>

        <div id="navbar" class="collapse navbar-admin navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-file-excel-o  fa-pad-right"></i>Download to Excel</a></li>
                <li><a href="#"><i class="fa fa-plus"></i>&nbsp;Add Entry</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container admin-main">
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
</div><!-- /.container-fluid -->

@stop
