@extends('Login.header')
@section('konten')
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif

				<form class="login100-form validate-form" action="{{ route('password.email') }}" method="POST">
					@csrf
					<span class="login100-form-title">
						Reset Password
                        <br />
                        <a class="txt2" href="/login">
							Kembali Ke Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</span>

					@error('email') <span class="text-sm text-danger">{{ $message }}</span> @enderror
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Send Reset Password
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@include('Login.footer')
@endsection

