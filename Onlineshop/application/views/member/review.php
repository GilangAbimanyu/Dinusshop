<div class="content mt-4">
	<h1 class="text-center">REVIEW</h1>

	<div class="container">
		<div class="row p-2 mt-3">
			<?php foreach($produk as $prod) { ?>
			<div class="col-md-3 col-6 d-flex align-self-stretch">
				<div class="card rounded shadow border mb-2 w-100 px-2 pt-2">
					<img src="<?= base_url('uploads/produk/'.$prod['foto'])?>" class="card-img-top" alt="..."
						width="100" height="230">
					<div class="card-body text-center">
                        <h6 class="card-title"><?= $prod['nama_produk']; ?> </h6>
						<h4 class="card-title text-success">Rp <?= number_format($prod['harga']); ?></h4>
						<a href="<?= base_url('produk/detail/'.$prod['produk_id'])?>" class="btn btn-primary">
                            Cek Review
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
