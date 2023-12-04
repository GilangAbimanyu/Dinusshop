<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sora">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/css_homepage.css">
	<link rel="stylesheet"
		href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<title>HomePage</title>
</head>

<body>
	<!--NAVBAR-->
	<nav class="navbar fixed-top navbar-dark navbar-expand-lg navbar-template navbar-custom">
		<a class="navbar-brand" href="<?php echo base_url('home'); ?>">
			<img src="<?php echo base_url(); ?>assets/logo/logo.png" width="50" height="50" alt="logo">
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
					<a class="nav-link" href="<?php echo base_url('produk'); ?>">Product</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('review'); ?>">Reviews</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('home/news'); ?>">News</a>
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

	<!-- Cart Modal -->
	<div class="cart_modal modal fade" id="CartModal" tabindex="-1" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<img src="https://img.icons8.com/material/28/000000/shopping-cart--v1.png" />
					<h5 class="modal-title" style="margin-left: 10px;" id="exampleModalLabel">Cart</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!---Cart Card--->
					<div class="phone-card card mb-3" style="max-width: 765px;">
						<div class="row no-gutters">
							<div class="col-sm-2">
								<center>
									<img class="phone" src="<?php echo base_url(); ?>assets/logo/phone.png" width="60"
										height="70" alt="...">
								</center>
							</div>
							<div class="col-sm-8">
								<div class="card-body">
									<h5>Title</h5>
									<p class="price">x.xxx.xxx</p>
								</div>
							</div>
							<div class="col-sm-2">
								<center>
									<!--COUNTER-->
									<div class="container">
										<div class="count-input space-bottom">
											<a class="incr-btn" data-action="decrease" href="#">–</a>
											<input class="quantity" type="text" name="quantity" value="1" />
											<a class="incr-btn" data-action="increase" href="#">&plus;</a>
										</div>
										<div class="trash">
											<a href="#"> <img
													src="https://img.icons8.com/material-outlined/24/000000/trash--v1.png" /></a>
										</div>
									</div>
								</center>
							</div>
						</div>
					</div>
				</div>
				<!--modal footer-->
				<div class="modal-footer">
					<div class="card mb-3" style="width: 765px;background-color:#22577A;">
						<div class="row no-gutters" style="background-color: transparent;">
							<div class="col-md-9 my-auto">
								<p class="label">Total Price : </p>
								<p class="nominal">x.xxx.xxxx</p>
							</div>
							<div class="col-md-3">
								<div class="card-body text-center mx-auto">
									<button type="button" class="btn btn-light" style="background-color:#F8F8FA">Check
										Out</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<h2 class="title text-center">HomePage</h2>
	</div>

	<!--Carousel-->
	<div class="container" id="container-carousel" style="cursor: grab;">
	<div id="myCarousel" class="carousel slide"  data-ride="carousel">
		<!-- Indicators -->
		<ul class="carousel-indicators" style="margin-bottom:-5px">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		</ul>
		
		<!-- The slideshow -->
		<div class="carousel-inner" style="background-color:#5c7bd1 ;height:100%;width:100%">
		<div class="carousel-item active" id="itemcarousel">
			<div class="container-fluid first-slide" id="carouselfluid">
			<div class="row" id="carouselrow">
				<div class="col-sm-6" id="container-row" >
				<div class="carousel-text"style="font-size:50px;margin-left:80px">
					<p style="font-size:15px;margin-top:40px">LATEST</p>
					<h3 style="margin-top:50px;"><strong>Redmi Note 10</strong></h3>
					<p style="font-size:20px;">
						Promo From <del>Rp 3,599,000</del> 
					</p>
					<p style="font-size:20px;margin-left:px;">
						To Rp 3,599,000 
					</p>
				</div>
				</div>
				<div class="col-sm-6">
				<img src="assets/redmi10.png" style="width: 100%;" class="first-slide" >
				</div>
			</div>
			</div>
		</div>
		<div class="carousel-item" style="background-color:#0789a5;height:100%;width:100%" id="itemcarousel">
		<div class="container-fluid second-slide ">
			<div class="row">
				<div class="col-sm-6" >
				<div class="carousel-text"style="font-size:50px;margin-left:80px">
					<p style="font-size:15px;margin-top:40px">LATEST</p>
					<h3 style="margin-top:50px;"><strong>Vivo Y12</strong></h3>
					<p style="font-size:20px;">
						Promo From <del>Rp 1,399,000</del> 
					</p>
					<p style="font-size:20px;margin-left:px;">
						To Rp 1,000,000
					</p>
				</div>
				</div>
				<div class="col-sm-6">
				<img src="assets/vivoy12.png" style="width:100%;" class="second-slide" >
				</div>
			</div>
			</div>
		</div>
		<div class="carousel-item" style="background-color:#2594b2;height:100%;width:100%;" id="itemcarousel">
		<div class="container-fluid third-slide">
			<div class="row">
				<div class="col-sm-6" >
				<div class="carousel-text"style="font-size:50px;margin-left:80px">
					<p style="font-size:15px;margin-top:40px">LATEST</p>
					<h3 style="margin-top:50px;"><strong>Vivo Y20</strong></h3>
					<p style="font-size:20px;">
						Promo From <del>Rp 1,419,000</del> 
					</p>
					<p style="font-size:20px;margin-left:px;">
						To Rp 1,200,000 
					</p>
				</div>
				</div>
				<div class="col-sm-6">
				<img src="assets/vivoy20.png" style="width: 100%" class="third-slide" >
				</div>
			</div>
			</div>
		</div>
		</div>
		
		<!-- Left and right controls -->
		<div class="Container">
		<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" data-slide="next">
		<span class="carousel-control-next-icon"></span>
		</a>
		
		<div class="nav_dots"></div>
	</div> 
	</div>

	<!--Brands-->
	<h2 class="text-center mt-5">BRANDS</h2>

	<div class="container">
		<div class="row p-2 mt-3">
			<?php foreach($brands as $b) { ?>
			<div class="col-md-3 col-6 d-flex align-self-stretch">
				<div class="card rounded shadow border mb-2 w-100 px-2 pt-2">
					<a href="<?= base_url('produk/brands/'.$b->id); ?>" class="">
						<img src="<?= base_url('uploads/'.$b->logo)?>" class="card-img-top" alt="..." width="100"
							height="150">
					</a>
					<div class="card-body text-center">
						<h5 class="card-title"><?= $b->nama_brands; ?> </h5>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>

	</div>

	<!-- Terbaru -->
	<h2 class="text-center mt-5">TRENDING</h2>
	<div class="container">
		<div class="row p-2 mt-3">
			<?php foreach($produk as $prod) { ?>
			<div class="col-md-3 col-6 d-flex align-self-stretch">
				<div class="card rounded shadow border mb-2 w-100 px-2 pt-2">
					<img src="<?= base_url('uploads/produk/'.$prod['foto'])?>" class="card-img-top" alt="..."
						width="100" height="230">
					<div class="card-body text-center">
						<a href="<?= base_url('produk/detail/'.$prod['produk_id'])?>">
							<h6 class="card-title"><?= $prod['nama_produk']; ?> </h6>
						</a>
						<h4 class="card-title text-success">Rp <?= number_format($prod['harga']); ?></h4>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>

	<!--footer-->
	<div class="footer">
		<img src="<?php echo base_url(); ?>assets/logo/logo.png" width="125" height="125" alt="logo">

		<div class="text-center p-3">
			<a class="footer-link" href="<?= base_url('home/aboutus');?>">About Us</a>
		</div>
	</div>
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
	</script>
	<script>
		$('#myModal').modal({
			backdrop: 'static',
			keyboard: true
		})

	</script>
	<script>
		/* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function (event) {
			if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
		}

	</script>
	<script>
		$(".incr-btn").on("click", function (e) {
			var $button = $(this);
			var oldValue = $button.parent().find('.quantity').val();
			$button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
			if ($button.data('action') == "increase") {
				var newVal = parseFloat(oldValue) + 1;
			} else {
				// Don't allow decrementing below 1
				if (oldValue > 1) {
					var newVal = parseFloat(oldValue) - 1;
				} else {
					newVal = 1;
					$button.addClass('inactive');
				}
			}
			$button.parent().find('.quantity').val(newVal);
			e.preventDefault();
		});

	</script>
	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
