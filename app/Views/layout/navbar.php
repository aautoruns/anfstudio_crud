<?php
$session = session();
?>
<nav class="navbar sticky-top navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/logo.png" alt="" style="max-width: 40px;">&nbsp&nbsp A N F &nbsp S t u d i o .</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title navbar-brand" id="offcanvasDarkNavbarLabel"><img src="/logo.png" style="max-width: 40px;">&nbsp&nbsp A N F &nbsp S t u d i o .</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <?php if ($session->get('isLoggedIn')) : ?>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= site_url('home/index') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('portofolio/index') ?>">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('etalase/index') ?>">Demo Store</a>
                        </li>

                        <?php if (session()->get('role') == 0) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-coffee text-danger"></i>&nbsp Admin Only
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="<?= site_url('barang/index') ?>"><i class="fa-solid fa-plus text-danger"></i>&nbsp Data Product</a></li>
                                    <li><a class="dropdown-item" href="<?= site_url('transaksi/index') ?>"><i class="fa-solid fa-money-bill text-danger"></i>&nbsp Data Transaction</a></li>
                                    <li><a class="dropdown-item" href="<?= site_url('user/index') ?>"><i class="fa-solid fa-user text-danger"></i>&nbsp Data User</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endif ?>
                <div class="nav-item dropdown">
                    <div class="">
                        <hr>
                        <?php if ($session->get('isLoggedIn')) : ?>
                            <a class="dropdown-item" href="<?= site_url('auth/logout') ?>"><i class="fa-solid fa-arrow-left-from-bracket"></i>&nbsp Logout</a>
                        <?php else : ?>
                            <a class="dropdown-item" href="<?= site_url('auth/login') ?>"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp Login</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="wrapper">
                            <h4 class="sosmed fw-bold">FOLLOW US!</h4>
                            <a href="https://www.facebook.com/galihazella" class="text-light">
                                <li class="icon facebook">
                                    <span class="tooltip">Facebook</span>
                                    <span><i class="fab fa-facebook-f"></i></span>
                                </li>
                            </a>
                            <a href="https://github.com/aautoruns/" class="text-light">
                                <li class="icon github">
                                    <span class="tooltip">GitHub</span>
                                    <span><i class="fab fa-github"></i></span>
                                </li>
                            </a>
                            <a href="https://www.instagram.com/aautoruns/" class="text-light">
                                <li class="icon instagram">
                                    <span class="tooltip">Instagram</span>
                                    <span><i class="fab fa-instagram"></i></span>
                                </li>
                            </a>
                        </ul>
                        <div class="copyright text-center my-auto text-light" style="text-decoration: none;">
                            <span>Copyright &copy; Galih Azella Firdaus - 21.240.0044</span>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>