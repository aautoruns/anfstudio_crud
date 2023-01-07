<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md">
            <h1>List Product</h1>
            <button class="btn btn-danger mb-5">
                <a class="dropdown-item" href="<?= site_url('barang/create') ?>">Add Product &nbsp
                    <i class="fa-solid fa-plus text-light"></i>
                </a>
            </button>
            <table class="table table-hover table-bordered">
                <thead>
                    <th>No. </th>
                    <th>Picture</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php foreach ($barangs as $index => $barang) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><img class="img-fluid" width="100px" src="<?= base_url('uploads/' . $barang->gambar) ?>" alt="product"></td>
                            <td><?= $barang->nama ?></td>
                            <td><?= $barang->harga ?></td>
                            <td><?= $barang->stok ?></td>
                            <td>
                                <a href="<?= site_url('barang/view/' . $barang->id) ?>" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a>
                                <a href="<?= site_url('barang/update/' . $barang->id) ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?= site_url('barang/delete/' . $barang->id) ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>