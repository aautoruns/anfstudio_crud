<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container" style="margin-top: 5vh;">
    <div class="btn btn-dark mb-3">
        <a class="text-light mt-4" href="<?= site_url('home/index') ?>" style="text-decoration: none;">
            <i class="fa-solid fa-home"></i>
        </a>
    </div>
    <h1>Etalase Product</h1>
    <div class="row">
        <?php foreach ($model as $m) : ?>
            <div class="col-md-3 mt-4 text-center">
                <div class="card h-50">
                    <img class="img-thumbnail" src="<?= base_url('uploads/' . $m->gambar)  ?>" alt="img-thumbnail">
                    <div class="card-body p-4 shadow    ">
                        <div><a href="<?= site_url('etalase/beli/' . $m->id) ?>" class="btn btn-danger mb-4">Order Product</a></div>
                        <a class="text-decoration-none link-dark stretched-link" href="<?= site_url('etalase/index') ?>">
                            <h3 class="card-title fw-bold"><?= $m->nama ?></h3>
                        </a>
                        <h6 class="card-text">Stock : <?= $m->stok ?></h6>
                        <h4 class="text-danger fw-bold"><?= "Rp " . number_format($m->harga, 2, ',', '.') ?></h4>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection() ?>