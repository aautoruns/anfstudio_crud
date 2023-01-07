<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-body">
                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 class="fw-light">Portfolio Example</h1>
                            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                            <p>
                                <a href="http://wa.me//6285328938346" class="btn text-light mt-3" style="background: #2fc557;"><i class="fa-brands fa-whatsapp"></i>&nbsp&nbsp Shortcut contact</a>
                                <a href="https://www.instagram.com/anfstudio13/" class="btn text-light mt-3" style="background: #7d3fc5;"><i class="fa-brands fa-instagram"></i>&nbsp&nbsp See details on our Instagram</a>
                                <?php if (session()->get('role') == 0) : ?>
                                    <a href="<?= site_url('portofolio/create') ?>" class="btn btn-danger"><i class="fa-brands fa-plus"></i>&nbsp&nbsp Add Portfolio</a>
                                <?php endif; ?>
                                <a class="btn btn-dark text-light mt-3" href="<?= site_url('home/index') ?>" style="text-decoration: none;">
                                    <i class="fa-solid fa-home"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <?php foreach ($portofolio as $row) : ?>
                        <div class="col-md-3 mt-4 text-center">
                            <div class="card h-50">
                                <img src="/img/portofolio/<?= $row['gambar']; ?>" style="max-width: 600px;">
                                <div class="card-body p-4 shadow    ">
                                    <h3 class="fw-bold"><?= $row['nama']; ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <br><br><br><br>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>