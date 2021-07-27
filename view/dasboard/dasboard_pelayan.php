<?php
require('../../functions.php');
session_start();
if (!isset($_SESSION["id_pegawai"])) {
    header("Location: ../../index.php?error=4");
}

nav("Lihat Pesanan");

dbConnect();
$pesananBelum = countPesananBelum()->fetch_array();
$pesananSelesai = countPesananSelesai()->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <aside class="sidebar">
        <menu>
            <ul class="menu-content">

                <li>
                    <a href="../dasboard/dasboard_pelayan.php">Home</a>
                </li>
                <li>
                    <a href="../login/logout.php"><i class="fa fa-cube"></i> <span>Log Out</span> </a>
                </li>
            </ul>
        </menu>
    </aside>
    <section class="jumbotron">
        <h1 class="display-6">Pesanan</h1>
        <div class="row mt-3">
            <div class="col">
            </div>
        </div>

        <div class="table">
            <table class="table">
                <tbody>
                <tr>
                    <td>Total Pesanan Yang Belum Selesai</td>
                    <td>:</td>
                    <td><?=$pesananBelum[0] ?></td>
                    <td colspan="3">
                        <div class="btn-detail" align="right">
                            <a href="list-pesanan/list-pesanan-belum.php" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Total Pesanan Yang Selesai</td>
                    <td>:</td>
                    <td><?=$pesananSelesai[0] ?></td>
                    <td colspan="3">
                        <div class="btn-detail" align="right">
                            <a href="list-pesanan/list-pesanan-selesai.php" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
