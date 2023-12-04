<div class="content mt-4">
	<h1 class="text-center">Daftar Pesanan Saya</h1>

    <div class="container">
        <table class="table table-striped">
            <thead class="bg-info text-white">
                <tr>
                    <td>#</td>
                    <td>Tanggal Pesanan</td>
                    <td>Alamat Pengiriman</td>
                    <td>Status</td>
                    <td>Resi</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php $angka=1; foreach($pesanan as $pesanan) :?>
                <tr>
                    <td><?= $angka++?></td>
                    <td><?= date('d M Y - H:i',strtotime($pesanan['created_at'])) ?></td>
                    <td><?= $pesanan['alamat_pengiriman'] ?></td>
                    <td>
                        <?php if($pesanan['status'] == 'Diterima') :?>
                            <span class="badge bg-success"><i class="fas fa-check"></i> <?= $pesanan['status'] ?></span>
                        <?php else :?>
                            <?= $pesanan['status'] ?>
                        <?php endif;?>
                    </td>
                    <td><?= $pesanan['resi'] ?></td>
                    <td>
                        <a href="<?= base_url('pesanan/detail/'.$pesanan['cekout_id']) ?>" class="btn btn-info text-white"><i class="fas fa-eye"></i> Detail</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>