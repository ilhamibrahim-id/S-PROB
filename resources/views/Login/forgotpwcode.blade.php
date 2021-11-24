@extends('Login.header')
@section('konten')
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Kode OTP
                        <br />
                        <a class="txt2" href="/login">
							Kembali Ke Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</span>

					<div class="card py-5 px-3">
                        <h5 class="m-0">Mobile phone verification</h5><span class="mobile-text">Enter the code we just send on your mobile phone <b class="text-danger">+91 86684833</b></span>
                        <div class="d-flex flex-row mt-5"><input type="text" class="form-control" autofocus=""><input type="text" class="form-control"><input type="text" class="form-control"><input type="text" class="form-control"></div>
                        <div class="text-center mt-5"><span class="d-block mobile-text">Don't receive the code?</span><span class="font-weight-bold text-danger cursor">Resend</span></div>
                    </div>
				</form>
			</div>
		</div>
	</div>
@include('Login.footer')
@endsection

