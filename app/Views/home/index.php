<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Header-->
<header class="bg-none text-dark">
    <div class="container-fluid" style="margin-top: 15vh;">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-5">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="mt-5 fw-bold" style="font-family: Poppins;" id="greetings"></h1>
                    <p></p>
                    <h6 style="font-family: Poppins;">
                        <?php
                        echo session()->get('username');
                        ?>, happy ordering :)
                    </h6>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-danger btn-lg px-4 me-sm-3 mt-3" href="<?= site_url('etalase/index') ?>">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <img class="img-fluid shadow-lg rounded-3 my-5" src="<?php echo base_url('img/screenprinting.jpg'); ?>" width="700px">
            </div>
        </div>
    </div>
</header>
<!-- Sample store section-->
<section class="py-5" style="margin-top: 10rem;">
    <div class=" container-fluid px-5 my-4">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Sample Store</h2>
                    <p class="lead fw-normal text-muted mb-5">Your best T-shirt should be like your bed; it just feels like you are home when you are in it.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?php echo base_url('img/handy-wicaksono-RTSrWPsK24s-unsplash 3.png'); ?>" alt="..." />
                    <div class="card-body p-4">
                        <div class="btn btn-danger mb-4">View Product</div>
                        <a class="text-decoration-none link-dark stretched-link" href="<?= site_url('etalase/index') ?>">
                            <h5 class="card-title mb-3">ANF Ghost White Basic T-Shirt</h5>
                        </a>
                        <p class="card-text mb-2 fw-bold">Materials : White cotton 24's Basic Tee</p>
                        <li>S : chest : 48 - length : 60 - sleeve : 17</li>
                        <li>M : chest : 50 - length : 62 - sleeve : 18</li>
                        <li>L : chest : 52 - length : 64 - sleeve : 19</li>
                        <li>XL : chest : 55 - length : 66 - sleeve : 20</li>
                        <li>XXL : chest : 58 - length : 68 - sleeve : 21</li>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="/anfstudiologo.svg" width="50px" alt="avatar" />
                                <div class="small">
                                    <div class="fw-bold">AFN Studio</div>
                                    <div class="text-muted">January 6, 2023 &middot; Added 2 hours ago.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?php echo base_url('img/handy-wicaksono-RTSrWPsK24s-unsplash 4.png'); ?>" alt="..." />
                    <div class="card-body p-4">
                        <div class="btn btn-danger mb-4">View Product</div>
                        <a class="text-decoration-none link-dark stretched-link" href="<?= site_url('etalase/index') ?>">
                            <h5 class="card-title mb-3">ANF Obsidian Black Basic T-Shirt</h5>
                        </a>
                        <p class="card-text mb-2 fw-bold">Materials : Dark cotton 24's Basic Tee</p>
                        <li>S : chest : 48 - length : 60 - sleeve : 17</li>
                        <li>M : chest : 50 - length : 62 - sleeve : 18</li>
                        <li>L : chest : 52 - length : 64 - sleeve : 19</li>
                        <li>XL : chest : 55 - length : 66 - sleeve : 20</li>
                        <li>XXL : chest : 58 - length : 68 - sleeve : 21</li>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="/anfstudiologo.svg" width="50px" alt="avatar" />
                                <div class="small">
                                    <div class="fw-bold">AFN Studio</div>
                                    <div class="text-muted">January 6, 2023 &middot; Added 2 hours ago.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?php echo base_url('img/handy-wicaksono-RTSrWPsK24s-unsplash 5.png'); ?>" alt="..." />
                    <div class="card-body p-4">
                        <div class="btn btn-danger mb-4">View Product</div>
                        <a class="text-decoration-none link-dark stretched-link" href="<?= site_url('etalase/index') ?>">
                            <h5 class="card-title mb-3">ANF Dijon Gold Basic T-Shirt</h5>
                        </a>
                        <p class="card-text mb-2 fw-bold">Materials : Butter cotton 24's Basic Tee</p>
                        <li>S : chest : 48 - length : 60 - sleeve : 17</li>
                        <li>M : chest : 50 - length : 62 - sleeve : 18</li>
                        <li>L : chest : 52 - length : 64 - sleeve : 19</li>
                        <li>XL : chest : 55 - length : 66 - sleeve : 20</li>
                        <li>XXL : chest : 58 - length : 68 - sleeve : 21</li>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="/anfstudiologo.svg" width="50px" alt="avatar" />
                                <div class="small">
                                    <div class="fw-bold">AFN Studio</div>
                                    <div class="text-muted">January 6, 2023 &middot; Added 2 hours ago.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Carousel -->
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
<section class="carousel" id="carousel">
    <div class="carousel__wrapper">
        <div>
            <div class="carousel__content">
                <div class="carousel__container">
                    <div class="carousel__slide">
                        <div class="card">
                            <div class="card__inner">
                                <div class="card__image">
                                    <a href="<?= site_url('portofolio/index') ?>">
                                        <img src="https://i.imgur.com/tchwJZS_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Charmander" />
                                    </a>
                                </div>
                                <h4>Sample Portfolio</h4>
                            </div>
                        </div>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp

                    <div class="carousel__slide">
                        <div class="card">
                            <div class="card__inner">
                                <div class="card__image">
                                    <a href="<?= site_url('portofolio/index') ?>">
                                        <img src="https://i.imgur.com/lkKY1eE_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Charmander" />
                                    </a>
                                </div>
                                <h4>Sample Portfolio</h4>
                            </div>
                        </div>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <div class="carousel__slide">
                        <div class="card">
                            <div class="card__inner">
                                <div class="card__image">
                                    <a href="<?= site_url('portofolio/index') ?>">
                                        <img src="https://i.imgur.com/XPgSviy_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Charmander" />
                                    </a>
                                </div>
                                <h4>Sample Portfolio</h4>
                            </div>
                        </div>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <div class="carousel__slide">
                        <div class="card">
                            <div class="card__inner">
                                <div class="card__image">
                                    <a href="<?= site_url('portofolio/index') ?>">
                                        <img src="https://i.imgur.com/EszbF45_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Charmander" />
                                    </a>
                                </div>
                                <h4>Sample Portfolio</h4>
                            </div>
                        </div>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <div class="carousel__slide">
                        <div class="card">
                            <div class="card__inner">
                                <div class="card__image">
                                    <a href="<?= site_url('portofolio/index') ?>">
                                        <img src="https://i.imgur.com/8UHLwDP_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Charmander" />
                                    </a>
                                </div>
                                <h4>Sample Portfolio</h4>
                            </div>
                        </div>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <div class="carousel__slide">
                        <div class="card">
                            <div class="card__inner">
                                <div class="card__image">
                                    <a href="<?= site_url('portofolio/index') ?>">
                                        <img src="https://i.imgur.com/MX9Cf3u_d.jpg?maxwidth=520&shape=thumb&fidelity=high" alt="Charmander" />
                                    </a>
                                </div>
                                <h4>Sample Portfolio</h4>
                            </div>
                        </div>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp

                </div>
                <div id="prev-slide" class="arrow arrow--left">
                    <i class="bx bx-chevron-left"></i>
                </div>
                <div id="next-slide" class="arrow arrow--right">
                    <i class="bx bx-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- EndCarousel -->

<!-- About section-->
<div class="py-5 bg-light">
    <div class="container-fluid px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">"A designer knows he has achieved perfection not when there is nothing left to add, but when there is nothing left to take away."</div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                        <div class="fw-bold">
                            Antoine de Saint-Exupéry
                            <span class="fw-bold text-primary mx-1">/</span>
                            French writer and poet
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Sesion -->
<div class="container-fluid mt-5" style="margin-bottom: 15vh;">
    <div class="row">
        <div class="col-md">
            <div class="row">
                <h1 class="fw-bold" style="margin-bottom: 5vh;">Need a help? Contact Us</h1>
                <div class="col-xl-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <a href="http://wa.me//6285328938346" class="btn text-light" style="background: #2fc557;"><i class="fa-brands fa-whatsapp"></i></a>
                            <h2 class="h5 fw-bold mt-2">WhatsApp Messenger</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <a href="https://www.instagram.com/anfstudio13/" class="btn text-light" style="background: #7d3fc5;"><i class="fa-brands fa-instagram"></i></a>
                            <h2 class="h5 fw-bold mt-2">Instagram</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <a href="https://maps.app.goo.gl/B4eehUDbibkc4dCF6" class="btn btn-primary"><i class="fa-solid fa-location-dot"></i></a>
                            <h2 class="h5 fw-bold mt-2">Maps</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <a href="#" class="btn btn-dark"><i class="fa-brands fa-tiktok"></i></a>
                            <h2 class="h5 fw-bold mt-2">TikTok</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <h1 class="fw-bold">"Design is not just what it looks like and feels like. Design is how it works."</h1>
                    <span>
                        <h5 class="mb-4">- Steve Jobs, co-founder of Apple, Inc.</h5>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>