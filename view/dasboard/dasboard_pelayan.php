<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header("Location: ../../index.php?error=4");
}

require('../../functions.php');

nav("Lihat Pesanan");

dbConnect();
$data = getPesanan()->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <aside class="sidebar">
        <menu>
            <ul class="menu-content">

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
    <section class="jumbotron">
        <h1 class="display-4">Pesanan</h1>
        <hr>
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
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </div>
    </section>
    </div>


</body>

</html>