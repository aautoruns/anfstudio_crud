<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1>View Product</h1>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="btn btn-dark mb-3">
                            <a class="text-light mt-4" href="<?= site_url('barang/index') ?>" style="text-decoration: none;">
                                <i class="fa-solid fa-chevron-left"></i>&nbsp Back
                            </a>
                        </div>
                        <div class="card-body">
                            <img class="etalase img-fluid mb-3" src="<?= base_url('uploads/' . $barang->gambar) ?>">
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="card-body">
                            <h1 class="fw-bold"><?= $barang->nama ?></h1>
                            <h4 class="text-danger">Price : Rp. <?= $barang->harga ?>,00</h4>
                            <h6>Stock : <?= $barang->stok ?></h6>
                        </div>
                        <div class="card-body">
                            <div class="label fw-bold">Size Chart</div>
                            <li>S : chest : 48 - length : 60 - sleeve : 17</li>
                            <li>M : chest : 50 - length : 62 - sleeve : 18</li>
                            <li>L : chest : 52 - length : 64 - sleeve : 19</li>
                            <li>XL : chest : 55 - length : 66 - sleeve : 20</li>
                            <li>XXL : chest : 58 - length : 68 - sleeve : 21</li>
                        </div>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>