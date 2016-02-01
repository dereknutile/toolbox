@extends('_layouts/app')

@section('content')

<div class="container">
    <div class="row app-buttons">
        <div class="col-xs-6 col-sm-3">
          <a href="{{ route('secrets') }}" class="btn btn-default app-button" title="Keys &amp; Passwords"><i class="fa fa-key"></i></a>
        </div>
        <div class="col-xs-6 col-sm-3">
          <a href="{{ route('kb') }}" class="btn btn-default app-button" title="Knowledgebase"><i class="fa fa-info-circle"></i></a>
        </div>
        <div class="col-xs-6 col-sm-3">
          <a href="{{ route('tasks') }}" class="btn btn-default app-button" title="Task &amp; Project Management"><i class="fa fa-check-square-o"></i></a>
        </div>
        <div class="col-xs-6 col-sm-3">
          <a href="{{ route('cloud') }}" class="btn btn-default app-button" title="Cloud Tools"><i class="fa fa-cloud-upload"></i></a>
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
