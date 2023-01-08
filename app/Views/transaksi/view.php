<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="btn btn-dark mb-3">
                <a class="text-light mt-4" href="<?= site_url('transaksi/index') ?>" style="text-decoration: none;">
                    <i class="fa-solid fa-chevron-left"></i>&nbsp Back
                </a>
            </div>
            <h4>Transaction ID<?= $transaksi->id_trans ?></h4>
            <table class="table table-hover table-bordered">
                <tr>
                    <td>Product Name</td>
                    <td><?= $transaksi->nama ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td class="text-danger"><?= $transaksi->username ?></td>
                </tr>
                <tr>
                    <td>Customer Address</td>
                    <td><?= $transaksi->alamat ?></td>
                </tr>
                <tr>
                    <td>Purchase Total</td>
                    <td><?= $transaksi->jumlah ?></td>
                </tr>
                <tr>
                    <td>Payment</td>
                    <td><?= $transaksi->bayar ?>&nbsp&nbsp&nbsp<a class="fw-bold text-danger" href="https://paygua.com/galihazellaa">Pay Here</a></td>

                </tr>
                <tr>
                    <td>Price Total</td>
                    <td>Rp. <?= $transaksi->total_harga ?>,00</td>
                </tr>
                <?php if (session()->get('role') == 0) : ?>
                    <tr>
                        <td>Custom Picture</td>
                        <td><a class="text-danger ml-5" href="<?= $transaksi->custom ?>" target="_new">Download File</a></td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>