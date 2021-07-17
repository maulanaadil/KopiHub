<?php
require('../../functions.php');

nav("Laporan harian");
dbConnect();
$data = getLaporanHarian()->fetch_all(MYSQLI_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan pendapatan harian</title>
</head>
<body>
    <div class="row mt-3">
        <h3>Laporan Pendapatan Harian</h3>
    </div>
    <div class="row mt-3">
        <center>
        <table class="table" style="width: auto;">
        <thead>
            <tr>
            <th scope="col">id pembayaran</th>
            <th scope="col">total</th>
            <th scope="col">date</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row) : ?>
            <tr>
            <th><?= $row["id_pembayaran"]; ?></th>
            <td align="right"><?= $row["total_harga"]; ?></td>
            <td><?= $row["tanggal"]; ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
        </table>
        <div class="row mt-3">
            <h6>Total Pendapatan: </h6>
        </div>
        </center>
    </div>
</body>
</html>
