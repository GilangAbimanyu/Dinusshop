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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css_navbar.css">
	<link rel="stylesheet"
		href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
	<link href="<?= base_url('assetAdmin/css/styles.css')?>" rel="stylesheet" />

	<title>LOGIN</title>
	<style>
		.content {
			margin-top: 120px;
		}

		body{
			 height: 100vh;
		}
		.container-fluid{
			min-height: 75vh;}

		.btn {
			background-color: #16C79A;
			color: #fff;
			width: 150px;
			border-radius: 10px;
		}

		.frm {
			border-radius: 10px;
		}

		.small {
			margin-top: 40px;
		}

	</style>
</head>

<body>
	<!--NAVBAR-->
	<nav class="navbar fixed-top navbar-dark navbar-expand-lg navbar-template navbar-custom">
		<a class="navbar-brand" href="#">
			<img src="<?php echo base_url(); ?>assets/logo.png" width="50" height="50" alt="logo">
		</a>
	</nav>



	<!-- LOGIN -->
	<div class="content">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="login text-center">
						<h1 class="h4 font-weight-bold">Login</h1>
					</div>
					<!-- ALERT BERHASIL FLASHDATA  -->
					<?php if($this->session->flashdata('flash')) :?>
					<div class="container">
						<div class="row mt-2">
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>SUKSES</strong> <?= $this->session->flashdata('flash')?>
								<button type="button" class="btn-close" data-bs-dismiss="alert"
									aria-label="Close"></button>
							</div>
						</div>
					</div>
					<?php endif;?>
					<!-- END FLASHDATA -->

					<!-- ALERT FLASHDATA GAGAL  -->
					<?php if($this->session->flashdata('flashgagal')) :?>
					<div class="container">
						<div class="row mt-2">
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>GAGAL</strong> <?= $this->session->flashdata('flashgagal')?>
								<button type="button" class="btn-close" data-bs-dismiss="alert"
									aria-label="Close"></button>
							</div>
						</div>
					</div>
					<?php endif;?>
					<!-- END FLASHDATA -->

					<div class="card o-hidden border-0 shadow-lg my-4">
						<div class="modal-body p-0">

							<!-- Nested Row within Card Body -->
							<div class="row">
								<div class="col-lg">
									<div class="p-5">
										<form class="user" action="<?= base_url('login/postLogin');?>" method="POST">
											<div class="form-group">
												<label class="control-label">Username</label>
												<input type="text" name="username" class="frm form-control bg-light"
													placeholder="Masukkan Username" required>
											</div>
											<div class="form-group">
												<label class="control-label">Password</label>
												<input type="password" name="password" class="frm form-control bg-light"
													placeholder="Masukkan Password" required>
											</div>
											<!-- <div class="text-center" type="submit">
                                                <a href="" class="btn">Login</a>
                                            </div> -->
											<div class="text-center">
												<button type="submit" class="btn btn-success">LOGIN</button>
											</div>
										</form>
										<div class="text-center">
											<h1 class="small">Don’t Have Account?</h1>
											<a class="small" href="<?= base_url('/register'); ?>">Register</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--footer-->
	<div class="footer">
		<img src="<?php echo base_url(); ?>assets/logo.png" width="125" height="125" alt="logo">

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
	<script src="<?=base_url('assetAdmin/js/scripts.js')?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
	</script>

</body>

</html>
