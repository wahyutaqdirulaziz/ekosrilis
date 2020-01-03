<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TempatNginap.com</title>
        <meta name="description" content="Solusi cepat tempat cari penginapan" />
        <link rel="icon" href="<?= site_url('assets/tempatnginap/img/tempatnginap-32.ico') ?>" type="image/x-icon"/>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/baru/');?>css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/baru/');?>css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/baru/');?>css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/baru/');?>css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="<?= base_url('assets/vendor/font-awesome-5.10.2/css/all.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/baru/css/font-awesome.min.css') ?>">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="<?= base_url('assets/baru/css/style.css') ?>"/>

        <style>
            .thumbnail-img-product {
                object-fit: cover;
                height: 200px;
            }
        </style>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i>087763305916</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> wahyudipe6@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> lombok - indonesia</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="<?php echo base_url('register')?>"><i class="fa fa-user"></i>Daftar</a></li>
						<li><a href="<?php echo base_url('login')?>"><i class="fa fa-lock"></i>Masuk</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="<?= base_url('assets/tempatnginap/img/logo.png');?>" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="newsletter">
							<?= form_open('cari')?>
                                <input class="input" placeholder="Cari penginapan" name="cari">
                                <button class="newsletter-btn">Cari</button>
                            <?=form_close()?>
								
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="<?= base_url();?>">Home</a></li>
						<li><a href="<?= base_url('penginapan');?>">Penginapan</a></li>
						<li><a href="<?= base_url('vila');?>">Vila</a></li>
						<li><a href="<?= base_url('rumahan');?>">Rumahan</a></li>
                        <li><a href="<?= base_url('kos');?>">Kos</a></li>
                        <li><a href="<?= base_url('hotel');?>">Hotel</a></li>
						<li>
							<a data-toggle="dropdown">Kategori</a>
							<ul class="dropdown-menu">
								<li><a href="">mataram</a></li>
								<li><a href="">lombok timur</a></li>
								<li><a href="">lombok barat</a></li>
								<li><a href="">lombok tengah</a></li>
								<li><a href="">lombok utara</a></li>
							</ul>
						</li>
<!--						<li>-->
<!--							<a data-toggle="dropdown">Rate harga</a>-->
<!--							<ul class="dropdown-menu">-->
<!--								<li><a href="">400.000 / bulan</a></li>-->
<!--								<li><a href="">300.000 / bulan</a></li>-->
<!--								<li><a href="">500.000 / bulan</a></li>-->
<!--								<li><a href="">200.000 / bulan</a></li>-->
<!--								<li><a href="">600.000 / bulan</a></li>-->
<!--							</ul>-->
<!--						</li>-->
					</ul>
					
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
        <!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">tempatnginap.com</h3>
						<ul class="breadcrumb-tree">
							<li><a class="active" href="#">SOLUSI CEPAT TEMPAT CARI PENGINAPAN</a></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->