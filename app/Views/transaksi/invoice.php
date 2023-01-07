<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #000000;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container" style="font-family: Coolvetica;">
        <div class="row">
            <div class="col">
                <div style="font-size:48px; color:'#dddddd'"><b>ANF Studio.</b></div>
                <p>
                    <br>Jl. Raya Brayo No.16, Ujungbiru, Brayo, Kec. Wonotunggal, Kabupaten Batang, Jawa Tengah 51253
                    <br>+62-853-2893-8346
                </p>
                <hr>
                <p>
                    Customer : <?= $pembeli->username ?><br>
                    Address : <?= $transaksi->alamat ?><br>
                    Transaction Code : <?= $transaksi->id ?><br>
                    Date Transaction : <?= date('Y-m-d', strtotime($transaksi->created_date)) ?>
                </p>
                <table cellpadding="6">
                    <tr>
                        <th><strong>Product</strong></th>
                        <th><strong>Unit Price</strong></th>
                        <th><strong>Total</strong></th>
                        <th><strong>Shipping Cost</strong></th>
                        <th><strong>Price Total</strong></th>
                    </tr>
                    <tr>
                        <td><?= $barang->nama ?></td>
                        <td><?= "Rp " . number_format($barang->harga, 2, ',', '.') ?></td>
                        <td><?= $transaksi->jumlah ?></td>
                        <td><?= "Rp " . number_format($transaksi->ongkir, 2, ',', '.') ?></td>
                        <td><?= "Rp " . number_format($transaksi->total_harga, 2, ',', '.') ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>