<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<?php
$id_barang = [
    'name' => 'id_barang',
    'id' => 'id_barang',
    'value' => $model->id,
    'type' => 'hidden'
];

$id_pembeli = [
    'name' => 'id_pembeli',
    'id' => 'id_pembeli',
    'value' => session()->get('id'),
    'type' => 'hidden'
];
$jumlah = [
    'name' => 'jumlah',
    'id' => 'jumlah',
    'value' => 1,
    'min' => 1,
    'class' => 'form-control',
    'type' => 'number',
    'max' => $model->stok,
];
$total_harga = [
    'name' => 'total_harga',
    'id' => 'total_harga',
    'value' => null,
    'class' => 'form-control',
    'readonly' => true,
];
$ongkir = [
    'name' => 'ongkir',
    'id' => 'ongkir',
    'value' => null,
    'class' => 'form-control',
    'readonly' => true,
];
$alamat = [
    'name' => 'alamat',
    'id' => 'alamat',
    'class' => 'form-control',
    'value' => null,
];
$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'type' => 'submit',
    'value' => 'Order Product',
    'class' => 'btn btn-danger',
];
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-5">
            <div class="btn btn-dark mb-3">
                <a class="text-light mt-4" href="<?= site_url('etalase/index') ?>" style="text-decoration: none;">
                    <i class="fa-solid fa-chevron-left"></i>&nbsp Back
                </a>
            </div>
            <div class="card-body">
                <img class="etalase img-fluid mb-3" style="max-height: 500px;" src="<?= base_url('uploads/' . $model->gambar) ?>">
            </div>
            <div class="card-body">
                <h1 class="fw-bold"><?= $model->nama ?></h1>
                <h4 class="text-danger">Price : Rp. <?= $model->harga ?>,00</h4>
                <h6>Stock : <?= $model->stok ?></h6>
            </div>
        </div>
        <div class="col-md-7 mt-5">
            <h4 class="mb-2 fw-bold"><u>Shipping</u></h4>
            <div class="form-group mb-2">
                <label for="provinsi">Choose Province</label>
                <select class="form-control" id="provinsi">
                    <option>-- Select --</option>
                    <?php foreach ($provinsi as $p) : ?>
                        <option value="<?= $p->province_id ?>"><?= $p->province ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="kabupaten">Choose District/City</label>
                <select class="form-control" id="kabupaten">
                    <option>-- Select --</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="service">Choose Shippment</label>
                <select class="form-control" id="service">
                    <option>-- Select --</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="bayar">Choose Payment</label>
                <select class="form-control" id="bayar">
                    <option>-- Select --</option>
                    <option value="1">&nbsp&nbsp DANA</option>
                    <option value="2">&nbsp&nbsp GoPay</option>
                    <option value="3">&nbsp&nbsp ShopeePay</option>
                    <option value="4">&nbsp&nbsp OVO</option>
                    <option value="4">&nbsp&nbsp Transfer Bank</option>
                </select>
            </div>
            <div class="input mt-3 mb-4">
                <label for="file" class="form-label">Input your custom picture (if needed)</label>
                <input class="form-control" type="file" id="file">
            </div>
            <strong>Estimation : <span id="estimasi"></span></strong>
            <hr>
            <?= form_open('etalase/beli') ?>
            <?= form_input($id_barang) ?>
            <?= form_input($id_pembeli) ?>
            <div class="form-group mb-2">
                <?= form_label('Total Purchase', 'jumlah') ?>
                <?= form_input($jumlah) ?>
            </div>
            <div class="form-group mb-2">
                <?= form_label('Shipping Cost', 'ongkir') ?>
                <?= form_input($ongkir) ?>
            </div>
            <div class="form-group mb-2">
                <?= form_label('Total Price', 'total_harga') ?>
                <?= form_input($total_harga) ?>
            </div>
            <div class="form-group mb-2">
                <?= form_label('Full Address', 'alamat') ?>
                <?= form_input($alamat) ?>
            </div>
            <div class="text-end mt-3">
                <?= form_submit($submit) ?>
            </div>
            <?= form_close() ?>
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Comment</h4>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="<?= site_url('komentar/create/' . $model->id) ?>" class="btn btn-link text-dark">Leave a comment</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php foreach ($komentar as $k) : ?>
                                <?php
                                $modelUser = new \App\Models\UserModel();
                                $namaUser = $modelUser->find($k->id_user)->username;
                                ?>
                                <strong><?= $namaUser ?></strong>
                                <br>
                                <?= $k->komentar ?>
                                <hr>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo base_url('img/handy-wicaksono-RTSrWPsK24s-unsplash 4.png'); ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration">Rp. <?= $model->harga ?>,00</span>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo base_url('img/handy-wicaksono-RTSrWPsK24s-unsplash 5.png'); ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration">Rp. <?= $model->harga ?>,00</span>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<br>
<br>
<br>

<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script>
    $('document').ready(function() {
        var jumlah_pembelian = 1;
        var harga = <?= $model->harga ?>;
        var ongkir = 0;
        $("#provinsi").on('change', function() {
            $("#kabupaten").empty();
            var id_province = $(this).val();
            $.ajax({
                url: "<?= site_url('etalase/getcity') ?>",
                type: 'GET',
                data: {
                    'id_province': id_province,
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var results = data["rajaongkir"]["results"];
                    for (var i = 0; i < results.length; i++) {
                        $("#kabupaten").append($('<option>', {
                            value: results[i]["city_id"],
                            text: results[i]['city_name']
                        }));
                    }
                },

            });
        });

        $("#kabupaten").on('change', function() {
            var id_city = $(this).val();
            $.ajax({
                url: "<?= site_url('etalase/getcost') ?>",
                type: 'GET',
                data: {
                    'origin': 154,
                    'destination': id_city,
                    'weight': 1000,
                    'courier': 'jne'
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var results = data["rajaongkir"]["results"][0]["costs"];
                    for (var i = 0; i < results.length; i++) {
                        var text = results[i]["description"] + "(" + results[i]["service"] + ")";
                        $("#service").append($('<option>', {
                            value: results[i]["cost"][0]["value"],
                            text: text,
                            etd: results[i]["cost"][0]["etd"]
                        }));
                    }
                },

            });
        });

        $("#service").on('change', function() {
            var estimasi = $('option:selected', this).attr('etd');
            ongkir = parseInt($(this).val());
            $("#ongkir").val(ongkir);
            $("#estimasi").html(estimasi + " Hari");
            var total_harga = (jumlah_pembelian * harga) + ongkir;
            $("#total_harga").val(total_harga);
        });

        $("#jumlah").on("change", function() {
            jumlah_pembelian = $("#jumlah").val();
            var total_harga = (jumlah_pembelian * harga) + ongkir;
            $("#total_harga").val(total_harga);
        });
    });
</script>
<?= $this->endSection() ?>