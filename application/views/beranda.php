<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Anime Template">
	<meta name="keywords" content="Anime, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $judul ?></title>

	<style>
		.navbar {
			background-color: #0a0a23;
			/* Sesuaikan warna latar belakang */
			padding: 10px;
		}

		.navbar .logo {
			font-size: 24px;
			font-weight: bold;
		}

		.navbar .logo .part1 {
			color: white;
			/* Warna untuk "TeR" */
		}

		.navbar .logo .part2 {
			color: red;
			/* Warna untuk "Anime" */
		}

		.btn-login {
			background-color: #DC3545;
			/* Warna background merah */
			color: white;
			/* Teks tombol berwarna putih */
			border: none;
			/* Tanpa border */
			padding: 5px 15px;
			/* Padding untuk ukuran tombol */
			border-radius: 5px;
			/* Sudut membulat (opsional) */
			font-size: 16px;
			/* Ukuran teks */
			cursor: pointer;
			/* Ikon pointer saat di-hover */
			box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
			/* Opsional: memberikan bayangan */
		}

		.btn-login:hover {
			background-color: darkred;
			/* Efek hover: sedikit lebih gelap */
		}

		.carousel {
			display: flex;
			overflow: hidden;
			width: 100%;
			/* Sesuaikan dengan lebar container */
			height: 550px;
			/* Tinggi carousel */
		}

		.carousel-item {
			flex: none;
			width: 100%;
			/* Lebar gambar */
			height: 100%;
			/* Tinggi gambar */
		}

		.carousel-item img {
			object-fit: cover;
			/* Memastikan gambar memenuhi area */
			width: 100%;
			height: 100%;
		}

		.welcome-text {
			color: white;
			/* Warna teks putih */
			font-size: 20px;
			/* Sesuaikan ukuran font */
			text-align: center;
			/* Untuk merapikan teks ke tengah */
		}

		.latest-title {
			color: #dc3545;
			/* Warna teks merah */
			font-size: 48px;
			/* Sesuaikan ukuran font */
			text-align: center;
			/* Untuk merapikan teks ke tengah */
			line-height: 2;
		}

	</style>

	<!-- favicon -->
	<link href="<?= base_url('assets/front/'); ?>img/icon.png" rel="icon">


	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

	<!-- Css Styles -->
	<link href="<?= base_url('assets/front/'); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>css/elegant-icons.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>css/plyr.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>css/nice-select.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>css/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>css/slicknav.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section Begin -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<div class="header__logo">
						<a href="" class="navbar-brand font-weight-bold" style="font-size: 25px;">
							<span class="text-white">TeR</span><span class="text-danger">Anime</span>
						</a>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="header__nav">
						<nav class="header__menu mobile-menu">
							<ul class="d-flex">
								<li><a href="<?= base_url() ?>" class="nav-item nav-link"
										style="font-size: 21px; color:white;">Home</a></li>
								<?php foreach ($kategori as $kate) { ?>
								<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"
									class="nav-item nav-link"
									style="position:relative; top: 14px; font-size: 20px; color:white;">
									<?= $kate['nama_kategori'] ?>
								</a>
								<?php } ?>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="header__right">
						<a href="<?= base_url('auth') ?>" class="btn-login">Login</a>
					</div>
				</div>
			</div>
			<div id="mobile-menu-wrap"></div>
		</div>
	</header>
	<!-- Header End -->

	<!-- Normal Breadcrumb Begin -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php $no = 1; foreach ($caraousel as $aa) { ?>
						<div class="carousel-item <?php if ($no == 1) { echo 'active'; } ?>">
							<img src=" <?= base_url('assets/upload/caraousel/' . $aa['foto']) ?> "
								class="d-block w-100">
						</div>
						<?php $no++; } ?>
					</div>
					<button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
						data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
						data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Normal Breadcrumb End -->

	<!-- Blog Section Begin -->
	<section class="blog spad">
		<div class="container">
			<div class="welcome-section">
				<p class="welcome-text">Selamat Datang di TeRAnime</p>
				<h1 class="latest-title">Latest Articles From Blog</h1>
			</div>
			<div class="row g-3">
				<?php $no = 1; foreach ($konten as $uu) { ?>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="shadow-sm mb-2">
						<img class="card-img-top mb-2" src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>"
							style="width: 100%; height: 500px; object-fit: cover; border-radius: 5px 5px 0 0;">
						<div class="card" style="background-color: #0B0C2A; color: white; border: none;">
							<h4 class="" style="color: white; text-align: center;"><?= $uu['judul'] ?></h4>
							<div class="d-flex justify-content-center mb-3">
								<small class="mr-3"><i class="fa fa-user"
										style="color: #dc3545; border: none; line-height: 2;"></i>
									<?= $uu['nama'] ?></small>
								<small class="mr-3"><i class="fa fa-folder"
										style="color: #dc3545; border: none; line-height: 2;"></i>
									<?= $uu['nama_kategori'] ?></small>
							</div>
							<div class="d-flex">
							<a href="<?= base_url('home/artikel/'. $uu['slug'])?>"
								class="btn btn-primary px-4 mx-auto my-2"
								style="background-color: #dc3545; color: white; border: none; position:relative; top: 14px;">Baca selengkapnya</a>
						</div>
						</div>
					</div>
				</div>
				<?php  } ?>
			</div>
		</div>
	</section>
	<!-- Blog Section End -->

	<!-- Footer Section Begin -->
	<footer class="footer">
		<div class="page-up">
			<a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
		</div>
		<div class="container-fluid text-white mt-5 py-5 px-sm-3 px-md-5" style="background-color: #070720;">
			<div class="row pt-5">
				<div class="col-lg-4 col-md-6 mb-5">
					<a href="<?= base_url() ?>" class="navbar-brand font-weight-bold" style="font-size: 40px;">
						<span class="text-white">TeR</span><span class="text-danger">Anime</span>
					</a>
					<p>
						<?= $konfig->profil_website; ?>
					</p>
				</div>
				<div class="col-lg-4 col-md-6 mb-5">
					<h3 class="text mb-4" style="color: #dc3545;">Contac Us</h3>
					<div class="d-flex">
						<h4 class="fa fa-map-marker" style="color: #dc3545;"></h4>
						<div class="pl-3">
							<h5 class="text-white">Alamat</h5>
							<p><?= $konfig->alamat; ?></p>
						</div>
					</div>
					<div class="d-flex">
						<h4 class="fa fa-envelope" style="color: #dc3545;"></h4>
						<div class="pl-3">
							<h5 class="text-white">Email</h5>
							<p><?= $konfig->email; ?></p>
						</div>
					</div>
					<div class="d-flex">
						<h4 class="fa fa-phone" style="color: #dc3545;"></h4>
						<div class="pl-3">
							<h5 class="text-white">Phone</h5>
							<p>+<?= $konfig->no_wa; ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-5">
					<h3 class="text mb-4" style="color: #dc3545;">Quick Links</h3>
					<div class="d-flex flex-column justify-content-start">
						<a class="text-white mb-2" href="<?= base_url() ?>"><i
								class="fa fa-angle-right mr-2"></i>Home</a>
						<?php foreach ($kategori as $kate) { ?>
						<a class="text-white mb-2" href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><i
								class="fa fa-angle-right mr-2"></i> <?= $kate['nama_kategori'] ?></a>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="container-fluid pt-5">
				<p class="m-0 text-center text-white">
					©
					<a class="text font-weight-bold" href="#">
						<span class="text-white">TeR</span><span class="text-danger">Anime</span>
					</a>.
					All Rights Reserved.
				</p>
			</div>
		</div>
	</footer>
	<!-- Footer Section End -->

	<!-- Js Plugins -->
	<script src="<?= base_url('assets/front/'); ?>js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/player.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/jquery.nice-select.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/mixitup.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/jquery.slicknav.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/main.js"></script>

</body>

</html>
