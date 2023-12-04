<div class="content mt-4">
	<h1 class="text-center">Detail Produk</h1>

	<!-- ALERT FLASHDATA  -->
	<?php if($this->session->flashdata('flash')):?>
	<div class="container">
		<div class="row mt-2">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil</strong> <?= $this->session->flashdata('flash')?>
			</div>
		</div>
	</div>
	<?php endif;?>
	<?php if($this->session->flashdata('flashgagal')) :?>
	<div class="container">
		<div class="row mt-2">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>GAGAL</strong> <?= $this->session->flashdata('flashgagal')?>
			</div>
		</div>
	</div>
	<?php endif;?>
	<!-- END FLASHDATA -->

	<div class="container">
		<div class="card mb-3">
			<div class="row g-0">
				<div class="col-md-4">
					<img src="<?= base_url('uploads/produk/'.$produk['foto']) ?>" class="img-fluid rounded-start"
						alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<form action="<?= base_url('produk/cekout')?>" method="POST">
							<input type="hidden" name="produk_id" value="<?= $produk['produk_id'] ?>">
							<h4 class="card-title"><?= $produk['nama_produk'] ?></h4>
							<h6 class="text-success">Rp <?= number_format($produk['harga']) ?></h6>
							<span class="badge bg-info text-white mb-3">Stok tersisa : <?= $produk['stok'] ?></span>
							<br>
							<h6 class="fw-bold">Deskripsi :</h6>
							<small><?= $produk['deskripsi'] ?></small>

							<div class="clearfix">
								<h5 class="mt-2">Quantity : </h5>
								<div class="btn-group inline pull-left col-md-3">
									<button class="btn btn-danger inline" type="button" data-quantity="minus"
										data-field="quantity">-</button>
									<input type="text" name="quantity" value="1"
										style="width: 100px; text-align: center;">
									<button class="btn btn-success inline" type="button" data-quantity="plus"
										data-field="quantity">+</button>
								</div>
							</div>
							<button type="submit" class="btn btn-success float-right mt-3 mb-3">Buy Now</button>
						</form>
						<form action="<?= base_url('produk/addToCart')?>" method="post">
							<input type="hidden" name="produk_id" value="<?= $produk['produk_id'] ?>">
							<input type="hidden" name="harga" value="<?= $produk['harga'] ?>">
							<button type="submit" class="btn btn-outline-success float-right mt-3 mb-3 mx-3"><i
									class="fas fa-cart-plus"></i> Add to Cart</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- REVIEW PRODUK -->
	<div class="container mb-3">
		<div class="card">
			<h5 class="card-header text-center">REVIEW</h5>
			<div class="card-body">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="<?=$produk['review'] ?>" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<!-- ULASAN PELANGGAN  -->
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h5>ULASAN</h5>
				<?php foreach($ulasan as $ulasan) :?>
				<div class="card mb-3">
					<div class="row g-0">
						<div class="col-md-3 col-3" style="max-width:200px">
							<?php if($ulasan['foto'] == null):?>
								<img src="<?= base_url('assets/img_avatar.png');?>" class="img-fluid rounded-start"
									alt="...">
							<?php else :?>
								<img src="<?= base_url('uploads/profil/'.$ulasan['foto']);?>" class="img-fluid rounded-start"
									alt="...">
							<?php endif;?>
						</div>
						<div class="col-md-9 col-9">
							<div class="card-body">
								<h5 class="card-title"><?= $ulasan['nama'] ?></h5>
								<p class="card-text"><?= $ulasan['ulasan'] ?></p>
								<p class="card-text">
									<?php for($i=0; $i<$ulasan['bintang']; $i++) :?>
										<i class="fas fa-star text-warning"></i>
									<?php endfor;?>
								</p>
								<p class="card-text"><small class="text-muted"><?= date('d M Y - H:i',strtotime($ulasan['created_at'])) ?></small></p>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function () {
		// This button will increment the value
		$('[data-quantity="plus"]').click(function (e) {
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			fieldName = $(this).attr('data-field');
			// Get its current value
			var currentVal = parseInt($('input[name=' + fieldName + ']').val());
			// If is not undefined
			if (!isNaN(currentVal)) {
				// Increment
				$('input[name=' + fieldName + ']').val(currentVal + 1);
			} else {
				// Otherwise put a 0 there
				$('input[name=' + fieldName + ']').val(0);
			}
		});
		// This button will decrement the value till 0
		$('[data-quantity="minus"]').click(function (e) {
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			fieldName = $(this).attr('data-field');
			// Get its current value
			var currentVal = parseInt($('input[name=' + fieldName + ']').val());
			// If it isn't undefined or its greater than 0
			if (!isNaN(currentVal) && currentVal > 0) {
				// Decrement one
				$('input[name=' + fieldName + ']').val(currentVal - 1);
			} else {
				// Otherwise put a 0 there
				$('input[name=' + fieldName + ']').val(0);
			}
		});
	});

</script>
