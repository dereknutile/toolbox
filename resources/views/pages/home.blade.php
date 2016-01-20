@extends('_layouts/app')

@section('content')
<div class="container fixed-top">
    <div class="row">
        <div class="col-sm-6">
            <div class="no-well">
                <h1>Application Overview</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, suscipit quidem, voluptatum dolorum nulla eum. Ea cum sit odio aperiam! Atque illum aut voluptatum eligendi illo perspiciatis facere vero provident.</p>
                <p>Natus itaque, nihil odio cupiditate quae, doloremque totam, doloribus consectetur enim fugiat officiis repellendus in illo! Incidunt inventore dolores fugiat sed ex ducimus in laborum reprehenderit debitis, magnam aliquid quis!</p>
            </div>
        </div>
        <div class="col-sm-6">
            <form class="form-signin">
                <div class="well">
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <label for="inputEmail" class="">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

                    <label for="inputPassword" class="">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

                    <div class="checkbox">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p><a href="main.html"><i class="fa fa-link"></i>&nbsp;Link to main page for mockup demonstration</a></p>
                </div>
                <!-- /.well -->
            </form>
        </div>
    </div>
</div>
@stop
