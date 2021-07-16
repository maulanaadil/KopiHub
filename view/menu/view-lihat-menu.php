<?php
require('../../functions.php');

nav("Lihat Menu");

dbConnect();
$data = getMenu()->fetch_all(MYSQLI_ASSOC);
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

<body>
    <div class="container">

        <div class="row mt-3">
            <div class="col">
                <h1>Menu</h1>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <div class="btn-tambah">
                    <a href="view-tambah-menu.php" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <?php foreach ($data as $row) : ?>
                <div class="col-md-4">
                    <div class="card mb-4" style="width: 16rem;">
                        <img src="../menu/images/<?php echo $row["gambar_menu"]; ?>" class="card-img-top" width="80" height="250">
                        <div class="card-body">
                        <center>
                            <h5 class="card-title"><?= $row["nama_menu"]; ?></h5>
                            <h5 class="card-title">Rp.<?= $row["harga"]; ?></h5>
                            <a href="view-ubah-menu.php" class="btn btn-primary">Ubah</a>
                            <a href="#" class="btn btn-primary">Hapus</a>
                        </center>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>