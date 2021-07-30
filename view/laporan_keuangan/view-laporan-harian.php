<?php
require('../../functions.php');
session_start();
if (!isset($_SESSION["id_pegawai"])) {
    header("Location: ../../index.php?error=4");
}

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
<!--SIDEBAR-->
<aside class="sidebar">
    <menu>
        <ul class="menu-content dropdown">
            <li>
                <a href="../dasboard/dasboard-kasir.php"><i class="fa fa-home">&nbsp;</i>Home</a>
            </li>
            <li>
                <a href="../menu/view-lihat-menu.php"><i class="fa fa-book">&nbsp;</i> <span>Menu</span> </a>
            </li>
            <li>
                <a href="../pesanan/view-lihat-pesanan.php">
                    <i class="fa fa-shopping-basket">&nbsp;</i>
                    <span>Pesanan</span>
                </a>
                <ul class="dropdown">
                    <li class="sub-li"><a href="../dasboard/list-pesanan/list-pesanan-selesai.php"><i
                                    class="fa fa-check">&nbsp;</i>Selesai</a></li>
                    <li class="sub-li"><a href="../dasboard/list-pesanan/list-pesanan-belum-dibayar.php"><i
                                    class="fa fa-times">&nbsp;</i>Belum Dibayar</a></li>
                    <li class="sub-li"><a href="../dasboard/list-pesanan/list-pesanan-belum-dibuat.php"><i
                                    class="fa fa-coffee ">&nbsp;</i>Belum Dibuat</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-file">&nbsp;</i><span>Laporan</span>
                </a>
                <ul class="dropdown">
                    <li class="sub-li"><a href="../laporan_keuangan/view-laporan-harian.php"><i class="fa fa-calendar">&nbsp;</i>Laporan
                            Harian</a></li>
                    <li class="sub-li"><a href="view-laporan-bulanan.php"><i
                                    class="fa fa-calendar">&nbsp;</i>laporan bulanan</a></li>
                </ul>
            </li>
            <li>
                <a href="../login/logout.php"><i class="fa fa-sign-out"></i> <span>Log Out</span> </a>
            </li>
        </ul>
    </menu>
</aside>
<!--BODY-->
<section class="jumbotron">
    <!--    FILTER LAPORAN-->
    <div class="filter-laporan">
        <form method="post">
            <dd>Silahkan Pilih tanggal untuk memfilter data.</dd>
            <p>&nbsp;
                Tanggal : <input type="date" name="tanggal">
            </p>
            <div class="btn_cari" style="margin-left: 210px">
                <button class="btn btn-primary" id="toggleVisibilityButton" name="btn_cari">Cari!</button>
            </div>
        </form>
        <hr>

<!--        TAMPILAN LAPORAN-->
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="tampilan-tabel">
                    <table class="table table-responsive" id="displaytable" style=" width: 100%;">
                        <thead>
                        <tr>
                            <th scope="col" style="width: 900px !important;">No</th>
                            <th scope="col" style="width: 900px !important;">Tanggal</th>
                            <th scope="col" style="width: 900px !important;">Bulan</th>
                            <th scope="col" style="width: 900px !important;">Tahun</th>
                            <th scope="col" style="width: 900px !important;">Pendapatan</th>
                        </tr>
                        </thead>
                        <tbody>

<!--                        //TODO: Tampilin data laporan harian -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
</body>

</html>
