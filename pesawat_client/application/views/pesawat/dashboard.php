<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Dashboard Pesawatcu</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Startup Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="<?php echo base_url('css/style2.css') ?>" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="<?php echo base_url('css/font-awesome2.min.css') ?>" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-lg-flex justify-content-between align-items-center py-3 px-sm-3">
					<!-- logo -->
					<div id="logo">
						<h1><a href="index.html"><span class="fa mr-2"><img src="<?php echo base_url('images/airplane.png') ?>"></span>Pesawatcu</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="<?php echo base_url() ?>pesawat/index" class="active">Home</a></li>
								<li><a href="<?php echo base_url() ?>customer/index">Customer</a></li>
								<li><a href="<?php echo base_url() ?>reservasi/index">Reservasi</a></li>
								<li><a href="<?php echo base_url() ?>rute/index">Rute</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
					<div class="d-flex mt-lg-1 mt-sm-2 mt-3 justify-content-center">
						<!-- logout -->
						<a href="<?php echo base_url() ?>login/logout">
							<span class="fa"><img src="<?php echo base_url('images/sign_out.png') ?>"></span>
						</a>
						<!-- //logout -->
					</div>
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt position-relative">
			<div class="container">
				<div class="d-md-flex">
					<div class="w3ls_banner_txt">
						<h3 class="w3ls_pvt-title"><span>Pesawatcu</span></h3>
						<p class="text-sty-banner">Penyedian layanan pemesanan pesawat dengan aman, nyaman, terpercaya.</p>
					</div>
					<div class="banner-img">
						<img src="<?php echo base_url('images/banner.png')?>" alt="" class="img-fluid">
					</div>
				</div>
			</div>
			<!-- animations effects -->
			<div class="icon-effects-w3l">
				<img src="<?php echo base_url('images/shape1.png') ?>" alt="" class="img-fluid shape-wthree shape-w3-one">
				<img src="<?php echo base_url('images/shape2.png')?>" alt="" class="img-fluid shape-wthree shape-w3-two">
				<img src="<?php echo base_url('images/shape3.png')?>" alt="" class="img-fluid shape-wthree shape-w3-three">
				<img src="<?php echo base_url('images/shape5.png')?>" alt="" class="img-fluid shape-wthree shape-w3-four">
				<img src="<?php echo base_url('images/shape4.png')?>" alt="" class="img-fluid shape-wthree shape-w3-five">
				<img src="<?php echo base_url('images/shape6.png')?>" alt="" class="img-fluid shape-wthree shape-w3-six">
			</div>
			<!-- //animations effects -->
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- what we do section -->
	<div class="what bg-li py-5" id="what">
		<div class="container py-xl-5 py-lg-3">
			<div class="row about-bottom-w3l text-center mt-4">
				<div class="col-lg-4 about-grid my-lg-0 my-5">
					<div class="about-grid-main">
						<img src="<?php echo base_url('images/secure.png')?>" alt="" class="img-fluid">
						<h4 class="my-4">Aman</h4>
						<p>Reservasi pesawat dengan sangat aman.</p>
					</div>
				</div>
				<div class="col-lg-4 about-grid my-lg-0 my-5">
					<div class="about-grid-main">
						<img src="<?php echo base_url('images/comfort.png')?>" alt="" class="img-fluid">
						<h4 class="my-4">Nyaman</h4>
						<p>Memberikan pelayanan yang nyaman.</p>
					</div>
				</div>
				<div class="col-lg-4 about-grid my-lg-0 my-5">
					<div class="about-grid-main">
						<img src="<?php echo base_url('images/trust.png')?>" alt="" class="img-fluid">
						<h4 class="my-4">Terpercaya</h4>
						<p>Penyedia layanan reservasi pesawat yang terpercaya.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //what we do section -->


	<!-- partners -->
	<section class="partners py-5" id="partners">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center font-weight-bold">Mitra Kami</h3>
			<div class="row grid-part text-center pt-4">
				<div class="col-md-2 col-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa"><img src="<?php echo base_url('images/lion.png') ?>" width="100px" height="70px" ></span></a>
						<h4>Lion Air</h4>
					</div>
				</div>
				<div class="col-md-2 col-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa"><img src="<?php echo base_url('images/batik.png') ?>" width="100px" height="70px" ></span></a>
						<h4>Batik Air</h4>
					</div>
				</div>
				<div class="col-md-2 col-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa"><img src="<?php echo base_url('images/citilink.png') ?>" width="100px" height="70px" ></span></a>
						<h4>Citilink</h4>
					</div>
				</div>
				<div class="col-md-2 col-4 mt-md-0 mt-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa"><img src="<?php echo base_url('images/garuda.png') ?>" width="100px" height="70px" ></span></a>
						<h4>GAruda Indonesia</h4>
					</div>
				</div>
				<div class="col-md-2 col-4 mt-md-0 mt-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa"><img src="<?php echo base_url('images/sriwijaya.png') ?>" width="100px" height="70px" ></span></a>
						<h4>Sriwijaya Air</h4>
					</div>
				</div>
				<div class="col-md-2 col-4 mt-md-0 mt-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa"><img src="<?php echo base_url('images/airasia.png') ?>" width="100px" height="70px" ></span></a>
						<h4>Indonesia Air Asia</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //partners -->

	<!-- footer -->
	<footer class="bg-li py-5">
	</footer>
	<!-- //footer -->
	<!-- copyright bottom -->
	<div class="copy-bottom bg-li py-4 border-top">
		<div class="container-fluid">
			<div class="d-md-flex px-md-3 position-relative text-center">
				<!-- footer social icons -->
				<div class="social-icons-footer mb-md-0 mb-3">
					<ul class="list-unstyled">
						<li>
							<a href="#">
								<span class="fa fa-facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-instagram"></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //footer social icons -->
				<!-- copyright -->
				<div class="copy_right mx-md-auto mb-md-0 mb-3">
					<p class="text-bl let">$copy 2020 Pesawatcu. All rights reserved</p>
				</div>
				<!-- //copyright -->
				<!-- move top icon -->
				<a href="#home" class="move-top text-center">
					<span class="fa fa-level-up" aria-hidden="true"></span>
				</a>
				<!-- //move top icon -->
			</div>
		</div>
	</div>
	<!-- //copyright bottom -->

</body>

</html>