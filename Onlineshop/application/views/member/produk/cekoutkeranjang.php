<div class="content mt-4">
	<h1 class="text-center">CEKOUT</h1>
	<div class="container">
        <form action="<?= base_url('keranjang/bayarSekarang');?>" method="post">
            <div class="row p-2">
                <div class="col-md-8">
                    <?php $subtotal = 0; ?>
                    <?php $ongkir = 15000; ?>
                    <div class="card border-primary mb-3">
                        <div class="card-body text-primary">
                            <label class="text-dark">Alamat Pengiriman :</label>
                            <textarea name="alamat_pengiriman" class="form-control" cols="5" rows="5" required></textarea>
    
                            <!-- Card Untuk Produk Yang Dibeli -->
                            <?php foreach($keranjang as $keranjang):?>
                            <div class="card mt-3">
                                <div class="row g-0">
                                    <div class="col-md-4 col-4">
                                        <img src="<?= base_url('uploads/produk/'.$keranjang['foto']); ?>" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8 col-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $keranjang['nama_produk'] ?></h5>
                                            <h6 class="text-success">Rp <?=number_format( $keranjang['harga']) ?></h6>
                                            <h4 class="text-dark mt-3">Quantity : <?= $keranjang['qty'] ?></h4>
                                            <h3 class="text-danger">Total : Rp <?= number_format($keranjang['total']) ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $subtotal = $subtotal + $keranjang['total'];?>
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
                            <h5 class="text-right">Total Pembayaran : Rp <?= number_format($subtotal+$ongkir) ?></h5>
    
                            <div class="d-grid gap-2">
                                <button class="btn btn-success btn-lg mt-2" type="submit">Bayar Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
	</div>
</div>
