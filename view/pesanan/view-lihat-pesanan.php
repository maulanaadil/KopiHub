<?php
require('../../functions.php');
session_start();
if (!isset($_SESSION["id_pegawai"])) {
    header("Location: ../../index.php?error=4");
}

nav("Lihat Pesanan");

dbConnect();
$data = getPesanan()->fetch_all(MYSQLI_ASSOC);
?>

<aside class="sidebar">
    <menu>
        <ul class="menu-content">
            <li>
                <?php if ($_SESSION['jabatan'] == "kasir") {
                    echo '<a href="../dasboard/dasboard-kasir.php">Home</a>';
                }

                if ($_SESSION['jabatan'] == "pelayan") {
                    echo '<a href="../dasboard/dasboard_pelayan.php">Home</a>';
                }

                if ($_SESSION['jabatan'] == "barista") {
                    echo '<a href="../dasboard/dasboard_barista.php">Home</a>';
                }
                ?>
            </li>
            <li>
                <a href="../menu/view-lihat-menu.php"><i class="fa fa-cube"></i> <span>Menu</span> </a>
            </li>
            <li><a href="../pesanan/view-lihat-pesanan.php"><i class="fa fa-shopping-basket"></i> <span>Pesanan</span></a></li>
            <li>
                <a href="../login/logout.php"><i class="fa fa-cube"></i> <span>Log Out</span> </a>
            </li>
        </ul>
    </menu>
</aside>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1 class="display-4">Pesanan</h1>
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
                <div class="card" style="width: 25rem; margin-bottom: 25px">
                    <div class="card-body">
                        <h4 class="rincian-pesanan" align="center">Rincian Pesanan</h4>
                        <hr class="bg-dark border-2 ">
                        <div class="card-body">
                            <table class="table-sm" width="100%">
                                <tr>
                                    <td>
                                        <h5>No Pesanan</h5>
                                    </td>
                                    <td>
                                        <h5 align="right"><?php echo $barisdata["no_pesanan"] ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>No Meja</h5>
                                    </td>
                                    <td>
                                        <h5 align="right"> <?php echo $barisdata["no_meja"] ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Status Pesanan</h5>
                                    </td>
                                    <td align="right">
                                        <?php
<<<<<<< HEAD
                                        if ($barisdata["status_pesanan"] == "belum") {
                                            $status = "btn  bg-danger text-white";
                                        } else if ($barisdata["status_pesanan"] == "selesai") {
                                            $status = "btn bg-success text-white";
                                        }
                                        ?>
                                        <h5 class="<?php echo $status ?>"><?php echo $barisdata["status_pesanan"] ?> </h5>
=======
                                            if ($barisdata["status_pesanan"] == "belum") {
                                                $status = "btn  bg-danger text-white";
                                            } else if ($barisdata["status_pesanan"] == "selesai") {
                                                $status = "btn bg-success text-white";
                                            }
                                         ?>
                                        <h5 class="<?= $status ?>"><?= $barisdata["status_pesanan"] ?> </h5>
>>>>>>> 6c78ad155e5cddb128e03bd7de90d395dde6508a
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Jumlah Pesanan</h5>
                                    </td>
                                    <td>
                                        <h5 align="right"><?php echo $barisdata["jumlah_pesanan"] ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Sub Total</h5>
                                    </td>
                                    <td>
                                        <h5 align="right"><?php echo $barisdata["sub_total"] ?></h5>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <hr>
                        <div class="btn-ubah" align="right">
                            <a href="view-ubah-pesanan.php?no_pesanan=<?php echo $barisdata["no_pesanan"]; ?>" class="btn btn-primary">Ubah</a>
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
