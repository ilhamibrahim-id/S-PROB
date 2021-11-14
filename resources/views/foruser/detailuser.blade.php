@extends('Login.header')
@section('konten')
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login101">
				<form class="login101-form validate-form">
                    <center><img src="images/img-01.png" alt="IMG"  width="300px"></center>
                    <br />
                    <br />
					<span class="login100-form-title">
						Hai, Ilham Ibrahim<br />
                        <a class="txt2" href="/">
							Kembali Ke Dashboard
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                        <br />
                        <br />
                        <br />
                        <center>
                            <table>
                                <tr>
                                    <td colspan="2" align="center"> 10 <br /> Follower </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td align="center" colspan="2"> 210<br /> Following </td>
                                </tr>
                                </table>
                                <p align="justify" style="width: 45%; padding-top: 40px; padding-bottom: 30px;"> kata kata kata kata kata kata kata kata kata kata kata kata ata kata kata kata kata kata kata kata kata kata kata kata ata kata kata kata kata kata kata kata kata kata kata kata </p>
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" readonly="readonly" value="ilham ibrahim">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                </center>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" readonly="readonly" value="ilham ibrahim">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Edit Profil
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@include('Login.footer')
@endsection

