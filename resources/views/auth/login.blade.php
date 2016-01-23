@extends('_layouts/landing')

@section('content')
<div class="container">
  <div class="row">
    <div class="sign-in-form">
      <div class="well shadowed">
        <h3>Sign-In</h3>

        @include('errors.validation_errors')

        <form class="form validate-form" role="form" method="POST" action="{{ url('/login') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group">
            <label class="control-label required">Email Address (<i class="muted">admin@test.com</i>)</label>
            <input type="email" class="form-control required" data-parsley-type="email" name="email" value="{{ old('email') }}" placeholder="you@email.com" required>
          </div>

          <div class="form-group">
            <label class="control-label required">Password (<i class="muted">password</i>)</label>

            <input type="password" class="form-control required" name="password" required>
          </div>

          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember"> Remember Me
              </label>
            </div>
          </div>

          <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
          <p class="subtle"><a class="btn btn-link" href="{{ route('reset') }}"><i class="fa fa-life-ring"></i>&nbsp;Did you forget your password?</a></p>
          </div>
        </form>
      </div><!-- /.well -->
    </div><!-- /.sign-in-form -->
  </div><!-- /.row -->
</div><!-- /.container -->
@endsection
