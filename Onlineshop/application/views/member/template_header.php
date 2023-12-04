<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sora">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/acss_product.css">
	<link rel="stylesheet"
		href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<title>PRODUCT</title>
</head>

<body>
	<!--NAVBAR-->
	<nav class="navbar fixed-top navbar-dark navbar-expand-lg navbar-template navbar-custom">
		<a class="navbar-brand" href="<?php echo base_url('home'); ?>">
			<img src="<?php echo base_url(); ?>assets/logo.png" width="50" height="50" alt="logo">
		</a>
		<div class="d-flex flex-row order-2 order-lg-3">
			<ul class="right-nav navbar-nav flex-row">
				<!--search icon-->
				<li class="nav-item">
					<div class="nav-link">
						<i class="btn-search fas fa-search fa-lg" data-toggle="modal" data-target="#searchmodal"></i>
					</div>
				</li>
				<!--cart icon-->
				<li class="nav-item">
                    <?php if($this->session->userdata('user') == 'guest') :?>
                    <a class="nav-link" href="<?= base_url('login/index_login');?>">
                    <?php else :?>
					<a class="nav-link" href="<?= base_url('keranjang');?>">
                    <?php endif;?>
						<img class="cart" src="<?php echo base_url(); ?>assets/cart.png" width="28" height="28" alt="">
					</a>
				</li>
				<li class="nav-item">
					<div class="nav-link" href="#">
						<!--profile dropdown-->
						<!--profile dropdown-->
						<div class="dropdown ">
							<?php if($this->session->userdata('foto')) :?>
								<img id="avatar" class="dropbtn" onclick="myFunction()"
									src="<?php echo base_url('uploads/profil/'.$this->session->userdata('foto')); ?>" width="30" height="30"
									alt="Avatar">
							<?php else :?>
									<img id="avatar" class="dropbtn" onclick="myFunction()"
										src="<?php echo base_url(); ?>assets/img_avatar.png" width="30" height="30"
										alt="Avatar">
							<?php endif;?>
							<div id="myDropdown" class="dropdown-content">
                                <?php if($this->session->userdata('user') == 'guest') :?>
                                    <a href="<?= base_url('login/index_login') ?>"><img id="avatar2" src="<?php echo base_url('assets/img_avatar.png'); ?>"
											width="30" height="30" alt="Avatar"><?= $this->session->userdata('user')?></a>
                                <?php elseif($this->session->userdata('foto') == null) :?>
									<a href="<?= base_url('home/profil') ?>"><img id="avatar2" src="<?php echo base_url('assets/img_avatar.png'); ?>"
											width="30" height="30" alt="Avatar"><?= $this->session->userdata('user')?></a>
								<?php else :?>
									<a href="<?= base_url('home/profil') ?>"><img id="avatar2" src="<?php echo base_url('uploads/profil/'.$this->session->userdata('foto')); ?>"
											width="30" height="30" alt="Avatar"><?= $this->session->userdata('user')?></a>
								<?php endif;?>
                                <?php if($this->session->userdata('user') == 'guest'):?>
                                    <a href="<?= base_url('login/index_login');?>">Pesanan Saya</a>
                                <?php else :?>
								    <a href="<?= base_url('pesanan') ?>">Pesanan Saya</a>
                                <?php endif;?>
								
                                <?php if($this->session->userdata('user') == 'guest'):?>
                                    <a href="<?= base_url('login/index_login');?>">Log Out</a>
                                <?php else :?>
								    <a href="<?= base_url('login/logout');?>">Log Out</a>
                                <?php endif;?>
							</div>
						</div>
					</div>
				</li>
			</ul>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse order-3 order-lg-2" id="navbarNavDropdown">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('home'); ?>">Home <span
							class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('produk')?>">Product</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('review')?>">Reviews</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('home/news')?>">News</a>
				</li>
			</ul>
		</div>
	</nav>
	<!--Search Modal -->
	<div class="modal fade" id="searchmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form class="search-bar" action="<?= base_url('produk/cari'); ?>" method="POST">
						<input class="input-search" type="text" placeholder="Search.." name="cari">
						<button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>


	

	
