<?php
require('../../functions.php');

nav("Lihat Pesanan");

dbConnect();
$data = getPesanan()->fetch_all(MYSQLI_ASSOC);
?>

<aside class="sidebar">
    <menu>
        <ul class="menu-content">

            <li>
                <a href="../menu/view-lihat-menu.php"><i class="fa fa-cube"></i> <span>Menu</span> </a>
            </li>
            <li><a href="../pesanan/view-lihat-pesanan.php"><i class="fa fa-shopping-basket"></i> <span>Pesanan</span></a></li>

            <li>
                <a href="#"><i class="fa fa-cube"></i> <span>Log Out</span> </a>
            </li>
        </ul>
    </menu>
</aside>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>Pesanan</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="btn-tambah" style="margin-bottom: 20px">
                <a href="view-tambah-pesanan.php" class="btn btn-success">Tambah</a>
            </div>
        </div>
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
                                <tr>
                                    <td>No Pesanan
                                    <td>:
                                    <td><?php echo $barisdata["no_pesanan"] ?></td>
                                </tr>
                                <tr>
                                    <td>No Meja
                                    <td>:
                                    <td> <?php echo $barisdata["no_meja"] ?></td>
                                </tr>
                                <tr>
                                    <td>Status Pesanan
                                    <td>:
                                    <td><?php echo $barisdata["status_pesanan"] ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Pesanan
                                    <td>:
                                    <td><?php echo $barisdata["jumlah_pesanan"] ?></td>
                                </tr>
                                <tr>
                                    <td>Sub Total
                                    <td>:
                                    <td><?php echo $barisdata["sub_total"] ?></td>
                                </tr>
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
</div>
</body>

</html>