<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>UICCI: United Islamic Culture Center of Indonesia </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= base_url()?>assets/images/logo_uicci.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= base_url()?>assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="<?= base_url()?>assets/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

	
	<!-- Modal -->
	<div class="modal fade" id="nisn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<div class="container">
			<div class="form-group mt-5 mb-5">
								<div class="row justify-content-center">
								<div class="col-sm-11 text-center">
								<?php if($this->session->flashdata('flash')) : ?>
								<?= $this->session->flashdata('flash')?>
								<?php endif?>
								<label for="nisn"><h1> NISN </h1></label>
								<form action="<?= base_url() ?>document/index" method="post">
									<input class="form-control" name="nisn" placeholder="Masukkan NISN anda" id="nisn" type="text">
									<button type="submit" class="btn btn-primary mt-3">Masukan</button>
								</form>
								</div>
							</div>
							</div>
				</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?= base_url() ?>home/index">
					<img src="<?= base_url()?>assets/images/logo_uicci1.png" width=70 alt="" />
				</a>
				<audio autoplay>
		<source src="<?= base_url() ?>assets/audio/lagu1.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
	</audio>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>home/index">Beranda</a></li>
						
						<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>home/tatatertib">Tata Tertib</a></li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Daftar Ulang </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="<?= base_url() ?>home/jawa">P. Jawa </a>
								<a class="dropdown-item" href="<?= base_url() ?>home/kalimantan">P. Kalimantan </a>
								<a class="dropdown-item" href="<?= base_url() ?>home/sumatera">P. Sumatera </a>
								<a class="dropdown-item" href="<?= base_url() ?>home/sulawesi">P. Sulawesi </a>
								<a class="dropdown-item" href="<?= base_url() ?>home/nusateng">P. Nusa Tenggara </a>
							</div>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pengumuman </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="<?= base_url() ?>home/daftarsantri">Daftar Santri Diterima </a>
								<a class="dropdown-item" href="<?= base_url() ?>home/surat_pemberitahuan">Surat Pemberitahuan </a>
								<a class="dropdown-item" href="<?= base_url() ?>home/hal_hal">Hal-hal Tentang Daftar Ulang </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>home/galeri">Galeri </a></li>
					
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#nisn"><span><i class="fa fa-download"></i> Cetak Form Daftar Ulang</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('<?= base_url()?>assets/images/gedung_uicci.jpeg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>UICCI</strong> Sulaimaniyah </h2>
										<p class="lead">"Sebaik-baik kalian adalah orang yang mempelajari Al-Qur'an dan mengajarkannya." (HR, Bukhari) </p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('<?= base_url()?>assets/images/wisuda_uicci.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Website Daftar Ulang<strong> UICCI</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">Lakukan daftar ulang sesuai lokasi yang anda pilih saat pertama kali mendaftar. </p>
										
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('<?= base_url()?>assets/images/gedung.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Lebih Dari</strong> 40 Cabang</h2>
										<p class="lead" data-animation="animated fadeInLeft">Cabang asrama UICCI terdapat di beberapa wilayah Indonesia dan juga terdapat hampir di seluruh negara dunia. </p>
										
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>