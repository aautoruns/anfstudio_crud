<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<?php
$nama = [
    'name' => 'nama',
    'id' => 'nama',
    'value' => null,
    'class' => 'form-control',
];
$harga = [
    'name' => 'harga',
    'id' => 'harga',
    'value' => null,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];
$stok = [
    'name' => 'stok',
    'id' => 'stok',
    'value' => null,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];
$gambar = [
    'name' => 'gambar',
    'id' => 'gambar',
    'value' => null,
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
                <a class="text-light" href="<?= site_url('barang/index') ?>" style="text-decoration: none;">
                    <i class="fa-solid fa-chevron-left"></i>&nbsp Back
                </a>
            </div>
            <h1>Add Product</h1>
            <?= form_open_multipart('barang/create') ?>
            <div class="form-group">
                <?= form_label("Name Product", "nama") ?>
                <?= form_input($nama) ?>
            </div>

            <div class="form-group">
                <?= form_label("Price", "harga") ?>
                <?= form_input($harga) ?>
            </div>

            <div class="form-group">
                <?= form_label("Stock", "stok") ?>
                <?= form_input($stok) ?>
            </div>

            <div class="form-group mb-3">
                <?= form_label("Product Image", "gambar") ?>
                <?= form_upload($gambar) ?>
            </div>
            <div class="inline-block text-end">
                <?= form_submit($submit) ?>
                <!-- <div class="btn btn-dark" href="<?= site_url('home/index') ?>">
                    <i class="fa-solid fa-arrow-right text-light"></i>&nbsp Back
                </div> -->
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>