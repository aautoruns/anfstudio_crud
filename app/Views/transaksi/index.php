<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md">
            <h4>Transaction ID</h4>
            <div class="table-responsive">
                <table class="table table-hover table-bordered ">
                    <tr>
                        <th>No.</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Price</th>
                        <th>Shipping Cost</th>
                        <th>Payment</th>
                        <th>Custom</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                        <?php foreach ($model as $index => $transaksi) : ?>
                            <tr>
                                <td><?= $transaksi->id ?></td>
                                <td><?= $transaksi->id_barang ?></td>
                                <td><?= $transaksi->id_pembeli ?></td>
                                <td><?= $transaksi->alamat ?></td>
                                <td><?= $transaksi->jumlah ?></td>
                                <td><?= $transaksi->total_harga ?></td>
                                <td><?= $transaksi->bayar ?></td>
                                <td><?= $transaksi->ongkir ?></td>
                                <td><?= $transaksi->custom ?></td>
                                <td>
                                    <a href="<?= site_url('transaksi/view/' . $transaksi->id) ?>" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a>
                                    <a href="<?= site_url('transaksi/invoice/' . $transaksi->id) ?>" class="btn btn-secondary"><i class="fa-solid fa-print"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>