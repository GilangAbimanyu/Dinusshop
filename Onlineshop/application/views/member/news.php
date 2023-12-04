<div class="content mt-4">
	<h1 class="text-center">NEWS</h1>

    <div class="container">
        <?php foreach($news as $news) :?>
        <div class="card mb-3 mt-3">
            <div class="row g-0">
                <div class="col-md-3 col-3" style="max-width:200px">
                    <img src="<?= base_url('uploads/news/'.$news['foto']);?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9 col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?= $news['judul'] ?></h5>
                        <p class="card-text"><?= $news['isi'] ?></p>
                        <p class="card-text"></p>
                        <p class="card-text"><small class="text-muted"><?= date('d M Y - H:i',strtotime($news['created_at'])) ?></small></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>

