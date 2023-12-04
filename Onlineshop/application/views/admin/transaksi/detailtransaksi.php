<div class="container-fluid px-4">
	<h1 class="mt-4 mb-3">Detail Transaksi</h1>

	<div class="container">
		<div class="row p-2">
			<div class="col-md-8">
				<div class="card border-primary mb-3">
					<div class="card-body text-primary">
						<label class="text-dark">Alamat Pengiriman : </label>
						<textarea name="alamat_pengiriman" class="form-control" cols="3" rows="3" readonly><?= $transaksi['alamat_pengiriman'] ?></textarea>

                        <?php $subtotal = 0;?>
                        <?php $ongkir = 15000;?>
						<?php foreach($item as $item) :?>
						<div class="card mt-3">
							<div class="row g-0">
								<div class="col-md-4 col-4">
									<img src="<?=base_url('uploads/produk/'.$item->foto)?>" class="img-fluid rounded-start"
										alt="...">
								</div>
								<div class="col-md-8 col-8">
									<div class="card-body">
										<h5 class="card-title">
											<?= $item->nama_produk?>
										</h5>
										<h6 class="text-success">Rp <?= number_format($item->harga)?></h6>
										<h4 class="text-dark mt-3">Quantity : <?= $item->qty ?></h4>
										<h3 class="text-danger">Total : Rp <?= number_format($item->total)?></h3>
									</div>
								</div>
							</div>
						</div>
                        <?php $subtotal = $subtotal + $item->total ?>
						<?php endforeach;?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card border-primary mb-3">
					<div class="card-body text-primary">
						<table class="table table-borderless">
							<tr>
								<td>Sub Total</td>
								<td>:</td>
								<td>Rp <?= number_format($subtotal) ?></td>
							</tr>
							<tr>
								<td>Ongkir</td>
								<td>:</td>
								<td>Rp <?= number_format($ongkir) ?></td>
							</tr>
						</table>
						<hr>
						<h6 class="text-right">Total : Rp <?= number_format($subtotal+$ongkir) ?></h6>
						
						<?php if($transaksi['status'] != "Diterima"):?>
						<div class="d-grid gap-2">
							<button class="btn btn-success btn-lg mt-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Konfirmasi</button>
						</div>
						<?php endif;?>
					</div>
				</div>
				<div class="card border-primary">
					<h5 class="card-header text-center">Bukti Transfer</h5>
					<div class="card-body">
                        <?php if($transaksi['bukti_tf'] != null) :?>
                            <img src="<?= base_url('uploads/buktitransfer/'.$transaksi['bukti_tf']); ?>" class="img-fluid">
                        <?php else :?>
                            <h1 class="text-center">-- Belum Ada --</h1>
                        <?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Upload Bukti</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('transaksi/konfirmasi')?>" method="post">
        <input type="hidden" name="cekout_id" value="<?= $transaksi['cekout_id'] ?>">
          <div class="modal-body">
            <label for="">Input Resi :</label>
            <input type="text" name="resi" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
      </form>
    </div>
  </div>
</div>