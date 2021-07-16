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
</div>
</body>

</html>