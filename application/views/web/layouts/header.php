<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
        	if(isset($penginapan)){
        ?>
				<title>TempatNginap.com - <?= $penginapan->nama_kamar ?></title>
		        <meta name="title" content="TempatNginap.com - <?= $penginapan->nama_kamar ?>" />
		        <meta name="description" content="<?= $penginapan->nama_kamar ?> harga mulai dari Rp. <?= number_format($penginapan->harga[0]->harga). ' ' . $penginapan->harga[0]->durasi ?>" />     
		        <meta property="og:url" content="<?= base_url($penginapan->jenis_kamar.'/'.$penginapan->slug) ?>" />
				<meta property="og:type" content="website" />
				<meta property="og:title" content="TempatNginap.com - <?= $penginapan->nama_kamar ?>" />
				<meta property="og:description" content="<?= $penginapan->nama_kamar ?> harga mulai dari Rp. <?= number_format($penginapan->harga[0]->harga). ' ' . $penginapan->harga[0]->durasi ?>" />
				<meta property="og:image" content="<?= site_url('uploads/images/penginapan/'.$penginapan->gambar_utama) ?>" />
        <?php
        	}else{
    	?>
				<title>TempatNginap.com</title>
		        <meta name="title" content="TempatNginap.com" />
		        <meta name="description" content="Solusi cepat tempat cari penginapan" />
		        <meta property="og:url" content="<?= base_url() ?>" />
				<meta property="og:type" content="website" />
				<meta property="og:title" content="TempatNginap.com" />
				<meta property="og:description" content="Solusi cepat tempat cari penginapan" />
				<meta property="og:image" content="<?= site_url('assets/tempatnginap/img/tempatnginap-230.png') ?>" />
    	<?php
    		}
    	?>   	


        <link rel="icon" href="<?= site_url('assets/tempatnginap/img/tempatnginap-32.ico') ?>" type="image/x-icon"/>
        <link rel="canonical" href="<?= base_url() ?>" />
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
	<body itemscope itemtype="http://schema.org/LocalBusiness">
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> <span itemprop="telephone">087763305916</span></a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> <span itemprop="email">wahyudipe6@gmail.com</span></a></li>
						<li><a href="#" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><i class="fa fa-map-marker"></i> <span itemprop="email"><span itemprop="addressLocality">lombok</span> - <span itemprop="addressCountry">indonesia</span></a></li>
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
								<a href="<?= base_url() ?>" class="logo">
									<img itemprop="image" src="https://tempatnginap.com/assets/tempatnginap/img/logo.png" alt="TempatNginap.com" style="display: none;" />
									<img src="<?= base_url('assets/tempatnginap/img/logo.png');?>" alt="TempatNginap.com">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="newsletter">
							<?php echo form_open('Home/cari')?>
									
									<input class="input" placeholder="Search here" name="keyword">
									<button class="newsletter-btn">Search</button>
									<?php echo form_close()?>
								
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- <div class="dropdown">
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
								</div> -->

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
						<li><a href="<?= base_url('lodging');?>">Penginapan</a></li>
						<li><a href="<?= base_url('vila');?>">Vila</a></li>
						<li><a href="<?= base_url('rumahan');?>">Rumahan</a></li>
                        <li><a href="<?= base_url('kos');?>">Kos</a></li>
                        <li><a href="<?= base_url('hotel');?>">Hotel</a></li>
<!--						<li>-->
<!--							<a href="javascript:void(0)" data-toggle="dropdown">Kategori</a>-->
<!--							<ul class="dropdown-menu">-->
<!--								<li><a href="">Kos Putra Putri</a></li>-->
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
						<h1 class="breadcrumb-header" style="display: none;">TEMPATNGINAP.COM - SOLUSI CEPAT TEMPAT CARI PENGINAPAN</h1>
						<h2 class="breadcrumb-header" style="font-size: 24px">tempatnginap.com</h2>
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