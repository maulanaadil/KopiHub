<?php require ('../../functions.php') ?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lihat Pesanan</title>
</head>
<body>
    <?php banner(); ?>
    <?php
    dbConnect();
    $data = getPesanan()->fetch_all(MYSQLI_ASSOC);
    ?>
    <div id="pesanan">
        <h1>Pesanan</h1>
    </div>

    <div class="btn-tambah">
        <a href="view-tambah-pesanan.php" class="btn btn-success">Tambah</a>
    </div>

    <div class="row">
        <?php foreach ($data as $barisdata) { ?>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="rincian-pesanan">Rincian Pesanan</h4>
                    <hr class="bg-dark border-2 ">
                    <div class="card-body">
                        <table>
                            <tr><td>No Pesanan<td>:<td><?php echo $barisdata["no_pesanan"] ?></td></tr>
                            <tr><td>No Meja<td>:<td> <?php echo $barisdata["no_meja"] ?></td></tr>
                            <tr><td>Status Pesanan<td>:<td><?php echo $barisdata["status_pesanan"] ?></td></tr>
                            <tr><td>Jumlah Pesanan<td>:<td><?php echo $barisdata["jumlah_pesanan"] ?></td></tr>
                            <tr><td>Sub Total<td>:<td><?php echo $barisdata["sub_total"] ?></td></tr>
                        </table>
                    </div>
                    <div class="btn-ubah">
                        <a href="#" class="btn btn-primary">Ubah</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
        }
    ?>
    </div>
</body>
</html>
