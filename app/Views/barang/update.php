<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<?php
$nama = [
    'name' => 'nama',
    'id' => 'nama',
    'value' => $barang->nama,
    'class' => 'form-control',
];
$harga = [
    'name' => 'harga',
    'id' => 'harga',
    'value' => $barang->harga,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];
$stok = [
    'name' => 'stok',
    'id' => 'stok',
    'value' => $barang->stok,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];
$gambar = [
    'name' => 'gambar',
    'id' => 'gambar',
    'value' => $barang->gambar,
    'class' => 'form-control',
];
$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Submit',
    'class' => 'btn btn-danger',
    'type' => 'submit',
];
?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="btn btn-dark mb-3">
                <a class="text-light mt-4" href="<?= site_url('barang/index') ?>" style="text-decoration: none;">
                    <i class="fa-solid fa-chevron-left"></i>&nbsp Back
                </a>
            </div>
            <h1>Update Product</h1>
            <?= form_open_multipart('barang/update/' . $barang->id) ?>
            <div class="form-group mb-3">
                <?= form_label("Name Product", "nama") ?>
                <?= form_input($nama) ?>
            </div>

            <div class="form-group mb-3">
                <?= form_label("Price", "harga") ?>
                <?= form_input($harga) ?>
            </div>

            <div class="form-group mb-3">
                <?= form_label("Stock", "stok") ?>
                <?= form_input($stok) ?>
            </div>

            <img class="img-fluid" width="200px" src="<?= base_url('uploads/' . $barang->gambar) ?>" alt="product">
            <div class="form-group mt-3">
                <?= form_label("Product Image", "gambar") ?>
                <?= form_upload($gambar) ?>
            </div>
            <div class="inline-block text-end mt-5">
                <?= form_submit($submit) ?>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>