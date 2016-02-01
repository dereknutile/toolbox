@extends('_layouts/medium')

@section('content')
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
