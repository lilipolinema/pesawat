<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Tambah Customer Pesawatcu</title>
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
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <link href="assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
								<li><a href="<?php echo base_url() ?>pesawat/index">Home</a></li>
								<li><a href="<?php echo base_url() ?>customer/index" class="active">Customer</a></li>
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
						<h3 class="w3ls_pvt-title">Tambah <span>Customer</span><br></h3>

						<!--Data Tables-->
						<div class="container-fluid"><br>
							<div class="card shadow mb-4">
								<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">
								<a href="<?= base_url();?>customer">Kembali</a></h6>
								</div>
							<div class="card-body">
								<?php echo form_open_multipart('customer/create'); ?>
									<table class="table table-bordered table-light" width="100%" cellspacing="0">
									<tbody align="center">
										<tr>
											<th>ID Customer</th>
											<td width="70%"><?php echo form_input('id_customer'); ?></td>
										</tr>
										<tr>
											<th>Nama</th>
											<td width="70%"><?php echo form_input('nama'); ?></td>
										</tr>
										<tr>
											<th>Alamat</th>
											<td width="70%"><?php echo form_input('alamat'); ?></td>
										</tr>
										<tr>
											<th>No Telepon</th>
											<td width="70%"><?php echo form_input('notelp'); ?></td>
										</tr>
										<tr>
											<th>Jenis Kelamin</th>
											<td width="70%"><?php echo form_input('gender'); ?></td>
										</tr>
										<tr>
											<td colspan="2"><?php echo form_submit('submit', 'Simpan'); ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>  
						<!-- //data tables-->
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
					<p class="text-bl let">&copy 20202 Pesawatcu. All rights reserved</p>
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
	<script src="assets/jquery/jquery.min.js"></script>
	<script src="assets/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/datatables/dataTables.bootstrap4.min.js'"></script>
	<script src="js/demo/datatables-demo.js"></script>
</body>

</html>