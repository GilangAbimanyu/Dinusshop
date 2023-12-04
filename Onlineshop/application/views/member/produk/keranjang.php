<div class="content mt-4 aa">
	<div class="top-box container" >
	<h1 class="text-center">Keranjang Anda</h1>

	<div class="container">
		<?php $subtotal = 0; foreach($keranjang as $keranjang) :?>
		<div class="row p-2">
			<div class="col-md-12 d-flex align-self-stretch">
				<div class="card mb-3 col-12 border">
					<div class="row p-4">
						<div class="col-md-3 col-sm-3" style="max-width:200px">
							<img src="<?= base_url('uploads/produk/'.$keranjang['foto'] );?>"
								class="img-fluid rounded-start" alt="...">							
						</div>
						<div class="col-md-6 col-sm-5">
							<div class="card-body">
								<h5 class="card-title"><?= $keranjang['nama_produk'] ?></h5>
								<h6 class="text-success">Rp <?= number_format($keranjang['harga']) ?></h6>
								<h4 class="mt-5 text-danger">Total : Rp <?= number_format($keranjang['total'])  ?></h4>
								<a href="<?= base_url('keranjang/hapusKeranjang/'.$keranjang['id']);?>" onclick="return confirm('Yakin akan dihapus ?')">
									<button class="btn btn-danger btn-sm mx-1"><i class="fas fa-trash-alt"></i></button>
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<br><br>
							<div class="clearfix">
								<div class="btn-group inline pull-left col-md-3 px-1">
									<form action="<?=base_url('keranjang/ubahQtyKeranjang/'.$keranjang['id'])?>" method="post">
										<input type="hidden" name="harga" value="<?= $keranjang['harga'] ?>">
										<input type="hidden" name="qty" value="<?= $keranjang['qty']-1; ?>">
										<button type="submit" class="btn btn-danger inline" type="button">-</button>
									</form>
									<input name="quantity" value="<?= $keranjang['qty'] ?>"
										style="max-width:50px; text-align: center;">
									<form action="<?=base_url('keranjang/ubahQtyKeranjang/'.$keranjang['id'])?>" method="post">
										<input type="hidden" name="harga" value="<?= $keranjang['harga'] ?>">
										<input type="hidden" name="qty" value="<?= $keranjang['qty']+1; ?>">
										<button type="submit" class="btn btn-success inline" type="button">+</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php $subtotal = $subtotal + $keranjang['total']; endforeach;?>

		<hr>
		<div class="text-right">
			<button class="btn btn-outline-success btn-lg disabled" >SUBTOTAL = Rp <?= number_format($subtotal) ?></button>
			<a href="<?= base_url('keranjang/cekout');?>">
				<button class="btn btn-warning btn-lg text-white"><i class="fas fa-shopping-cart"></i> CEKOUT</button>
			</a>
		</div>
	</div>
</div>
