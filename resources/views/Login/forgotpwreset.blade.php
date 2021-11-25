@extends('Login.header')
@section('konten')
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
					@csrf
					<input type="hidden" name="token" value="{{ request()->route('token') }}">
					<span class="login100-form-title">
						Reset Password Baru
						<br />
						<a class="txt2" href="/login">
							Kembali Ke Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</span>
					
					<input type="email" name="email" placeholder="email" value="{{ request()->query('email') }}" readonly>
					@error('email') <span>{{ $message }}</span> @enderror
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password Baru">
						@error('password') <span>{{ $message }}</span> @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password_confirmation" placeholder="Konfirmasi Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
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

