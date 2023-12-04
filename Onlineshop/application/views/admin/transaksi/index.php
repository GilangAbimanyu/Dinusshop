<div class="container-fluid px-4">
	<h1 class="mt-4 mb-3">Daftar Transaksi</h1>

	<div class="row">
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Nama Pelanggan</td>
                        <td>Tanggal Pesanan</td>
                        <td>Status</td>
                        <td>Resi</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $angka=1; foreach($transaksi as $t):?>
                    <tr>
                        <td><?= $angka++ ?></td>
                        <td><?= $t['nama'] ?></td>
                        <td><?= date('d M Y - H:i',strtotime($t['created_at'])) ?></td>
                        <td>
                            <?php if($t['status'] == "Diterima") :?>
                                <span class="badge bg-success"><i class="fas fa-check"></i> <?= $t['status'] ?></span>
                            <?php else :?>
                                <?= $t['status'] ?>
                            <?php endif;?>
                        </td>
                        <td><?= $t['resi'] ?></td>
                        <td>
                            <a href="<?= base_url('transaksi/detail/'.$t['cekout_id']); ?>" class="btn btn-info text-white"><i class="fas fa-eye"></i> Detail</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
	</div>
</div>
