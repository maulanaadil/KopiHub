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

<!DOCTYPE html>
<html lang="en">

<body>
    <aside class="sidebar">
        <div class="row mt-3">
            <div class="col" style="color: white">
                <h1>Pesanan</h1>
            </div>
        </div>
        <menu>
        <ul class="menu-content">
            <li>
                <a href="../login/logout.php"><i class="fa fa-cube"></i> <span>Log Out</span> </a>
            </li>
        </ul>
        </menu>
    </aside>
    <section class="jumbotron">
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
