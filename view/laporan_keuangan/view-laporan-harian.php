<?php
require('../../functions.php');

nav("Laporan");
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
        <?php
            $total = getTotalHarian()->fetch_all(MYSQLI_ASSOC);
            foreach($total as $total_pendapatan): ?>
            <div class="alert alert-success" role="alert">
                Pendapatan Pada Tanggal <?php echo $total_pendapatan['tanggal']; ?>
            </div>
        <?php endforeach ?>
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
        <?php 
            $total = getTotalHarian()->fetch_all(MYSQLI_ASSOC);

            foreach($total as $total_pendapatan): ?>
        <div class="row mt-3">
            <h6>Total Pendapatan : Rp.<?php echo $total_pendapatan['SUM(total_harga)']; ?> </h6>
        </div>
        
        </center>
        <?php endforeach ?>
    </div>
</body>
</html>
