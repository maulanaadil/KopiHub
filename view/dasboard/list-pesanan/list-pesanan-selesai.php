<?php
require('../../../functions.php');
session_start();
if (!isset($_SESSION["id_pegawai"])) {
    header("Location: ../../../index.php?error=4");
}

nav("Lihat Pesanan");

dbConnect();
$data = getPesananSelesai()->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../style.css">
</head>

<body>
<aside class="sidebar">
    <menu>
        <ul class="menu-content">

            <li>
                <a href="../../dasboard/dasboard_pelayan.php">Home</a>
            </li>
            <li>
                <a href="../../login/logout.php"><i class="fa fa-cube"></i> <span>Log Out</span> </a>
            </li>
        </ul>
    </menu>
</aside>
<section class="jumbotron">
    <h1 class="display-6">Detail Pesanan Yang Selesai</h1>
    <hr>
    <div class="row mt-3">
        <div class="col">
        </div>
    </div>

    <div class="row">
        <?php foreach ($data as $barisdata) { ?>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>
                                    <h5>No Pesanan</h5>
                                </td>
                                <td>
                                    <h5>:</h5>
                                </td>
                                <td>
                                    <h5><?php echo $barisdata["no_pesanan"] ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>No Meja</h5>
                                </td>
                                <td>
                                    <h5>:</h5>
                                </td>
                                <td>
                                    <h5> <?php echo $barisdata["no_meja"] ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Status Pesanan</h5>
                                </td>
                                <td>
                                    <h5>: </h5>
                                </td>
                                <td>
                                    <h5><?php echo $barisdata["status_pesanan"] ?> </h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Jumlah Pesanan</h5>
                                </td>
                                <td>
                                    <h5>:</h5>
                                </td>
                                <td>
                                    <h5><?php echo $barisdata["jumlah_pesanan"] ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Sub Total</h5>
                                </td>
                                <td>
                                    <h5>:</h5>
                                </td>
                                <td>
                                    <h5><?php echo $barisdata["sub_total"] ?></h5>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>
</body>
</html>
