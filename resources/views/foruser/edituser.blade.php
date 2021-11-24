@extends('Login.header')
@section('konten')
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login101">
                <form class="login101-form validate-form">
					<span class="login100-form-title">
                        <img src="images/img-01.png" alt="IMG"  width="300px">
                        <br />
						Hai, Ilham Ibrahim<br />
                        <a class="txt2" href="/detailuser">
							Kembali Ke Detail Profile
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</span>
                    <span class="symbol-input100">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                    </span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input type="text" class="form-control" id="inputName" placeholder="Nama">
                        <br />
                        <textarea class="form-control" id="inputComment" placeholder="Rubah Kata kata"></textarea>
                        <br />
                        <input type="file" class="form-control" id="foto">
                        <p> Ganti foto ? jika tidak biarkan kosong </p>
					</div>
                    <div class="container-login100-form-btn">
                    <button class="login101-form-btn">
                        Profil
                   </button>
                    </div>
                </form>
			</div>
		</div>
	</div>
@include('Login.footer')
@endsection

