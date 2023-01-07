<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<?php
$komentar = [
    'name' => 'komentar',
    'id' => 'komentar',
    'value' => null,
    'class' => 'form-control'
];
$barang = [
    'name' => 'id_barang',
    'id' => 'id_barang',
    'value' => $id_barang,
    'type' => 'hidden'
];
$user = [
    'name' => 'id_user',
    'id' => 'id_user',
    'value' => session()->get('id'),
    'type' => 'hidden'
];
$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'type' => 'submit',
    'value' => 'Submit',
    'class' => 'btn btn-danger'
];
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md">
            <div class="btn btn-dark mb-3">
                <a class="text-light" href="<?= site_url('etalase/beli' . $model->id_barang) ?>" style="text-decoration: none;">
                    <i class="fa-solid fa-chevron-left"></i>&nbsp Back
                </a>
            </div>
            <h1>Leave a comment</h1>
            </h1>
            <?= form_open('komentar/create/' . $id_barang) ?>
            <?= form_input($user) ?>
            <?= form_input($barang) ?>
            <div class="form-group">
                <?= form_label("Comment", "komentar") ?>
                <?= form_textarea($komentar) ?>
            </div>
            <div class="text-end mt-4">
                <?= form_submit($submit) ?>
            </div>
            <?= form_close() ?>

            <?= $this->endSection() ?>
            <?= $this->section('script') ?>

            <script src="<?= base_url('ckeditor5-build-classic/ckeditor.js') ?>" type="text/javascript"></script>
            <style>
                .ck-editor__editable_inline {
                    min-height: 200px;
                }
            </style>
            <script>
                ClassicEditor
                    .create(document.querySelector('#komentar'))
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        </div>
    </div>
</div>

<?= $this->endSection() ?>