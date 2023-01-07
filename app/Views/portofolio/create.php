<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="container mt-3">
                <div class="col-md">
                    <form action="/portofolio/save" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <a href="<?= site_url('portofolio/index') ?>" class="btn btn-dark mb-3"><i class="fas fa-arrow-left"></i></a>
                        <h1>Add Portofolio</h1>

                        <div class="form-group mb-3">
                            <label for="nama">Portofolio Name</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>

                        <div class="custom-file mb-3">
                            <label class="custom-file-label" for="validatedCustomFile">Choose Picture</label>
                            <input type="file" class="form-control custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" autofocus value="<?= old('gambar'); ?>" id="gambar" name="gambar">
                            <div class="invalid-feedback"> <?= $validation->getError('gambar'); ?></div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>