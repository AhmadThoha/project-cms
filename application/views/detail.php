<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Anime Template">
	<meta name="keywords" content="Anime, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $konten->judul ?></title>

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

		.wrap-text {
			word-wrap: break-word;
			/* Memotong kata panjang */
			white-space: normal;
			/* Izinkan teks membungkus */
			max-width: 600px;
			/* Sesuaikan dengan lebar maksimal */
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

	<section class="anime-details spad">
		<div class="container">
			<div class="anime__details__content">
				<div class="row">
					<div class="col-lg-3">
						<div class="anime__details__pic set-bg" data-setbg="<?= base_url('assets/upload/konten/'. $konten->foto )?>">
						</div>
					</div>
					<div class="col-lg-9">
						<div class="anime__details__text">
							<div class="anime__details__title">
								<h3 class="wrap-text"><?= $konten->judul; ?></h3>
							</div>
							<p><?= nl2br(htmlspecialchars($konten->keterangan)); ?></p>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- Footer Section Begin -->
	<footer class="footer">
		<div class="page-up">
			<a href="<?= base_url() ?>" id="backToHome"><span class="arrow_carrot-left"></span></a>
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
