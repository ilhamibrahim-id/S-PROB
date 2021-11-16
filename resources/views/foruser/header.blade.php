<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sports</title>
    <!-- Goole Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,500" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{ asset('css/owl.carousel.css')}}" rel="stylesheet">
	 <link href="{{ asset('css/owl.theme.default.min.css')}}" rel="stylesheet">

    <!-- Off Canvas Menu -->
    <link href="{{ asset('css/offcanvas.min.css')}}" rel="stylesheet">

    <!--Theme CSS -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<div id="main-wrapper">

    <!-- Header Section -->
	<header>
	    <div class="container">
	     	<div class="top_ber">
				<div class="row">
		    		<div class="col-md-6">
						<div class="top_ber_left">
							20 August. Thursday 2015. 2:00 PM.
						</div><!--top_ber_left-->
		    		</div><!--col-md-6-->
		    		<div class="col-md-6">
		    			<div class="top_ber_right">
		    				<div class="top-menu">
		    					<ul class="nav navbar-nav">
			                        <li><a href="/login">Login</a></li>
                                    <li><a href="#">/</a></li>
			                        <li><a href="/register">Register</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, Ilham Ibrahim <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/detailmaster">Detail Profil</a></li>
                                            <li><a href="#">Logout</a></li>
                                        </ul>
                                    </li>
	                    		</ul>
		    				</div><!--top-menu-->
		    			</div><!--top_ber_left-->
		    		</div><!--col-md-6-->
		    	</div><!--row-->
	     	</div><!--top_ber-->

	     	<div class="header-section">
				<div class="row">
		    	 	<div class="col-md-3">
						<div class="logo">
						<a  href="/"><img class="img-responsive" src="{{ asset('img/logo.png')}}" alt=""></a>
						</div><!--logo-->
		    	 	</div><!--col-md-3-->

		    	 	<div class="col-md-6">
		    	 	</div><!--col-md-6-->

		    	 	<div class="col-md-3">
                            <a href="/mypost"<button type="button" class="btn btn-danger" style="float: right; padding: 15px 25px 15px 25px; margin-top: 15px;"><i class="icon-pencil"> </i> &nbsp;Tulis Postingan Baru</button></a>
		    	 	</div><!--col-md-3-->
		    	</div> <!--row-->
	     	</div><!--header-section-->
	    </div><!-- /.container -->

		<nav class="navbar main-menu navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				</div>
				<div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 30px;">Piih Kategori<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
						</ul>
					</li>
				</ul>
				<div class="pull-right">
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input class="form-control" placeholder="Search" name="q" type="text">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
		</nav>
		<!-- .navbar -->
	</header>
@yield('konten')
