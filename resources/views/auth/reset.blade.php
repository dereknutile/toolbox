@extends('_layouts/landing')

@section('content')
<div class="container-fluid">
	<div class="row">
      <div class="sign-in-form">
        <div class="well shadowed">
            <h3>Reset Password</h3>
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="token" value="{{ $token }}">

				<div class="form-group">
					<label class="col-md-4 control-label required">E-Mail Address</label>
					<div class="col-md-6">
						<input type="email" class="form-control" name="email" value="{{ old('email') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label required">Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label required">Confirm Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Reset Password
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
