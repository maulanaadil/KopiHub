<?php
require('../../functions.php');

nav("Barista");

dbConnect();
$data = getPesanan()->fetch_all(MYSQLI_ASSOC);
?>

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
    <h1 class="display-4">Barista</h1>
    <hr>
    <div class="row px-4">

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Data Pesanan 1</h5>
          <p class="card-text">Berisi Data Pesanan yang telah dibuat oleh pelanggan </p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="pesanan1" id="pesanan01">
            <label class="form-check-label" for="pesanan01">
              Sedang Dibuat
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="pesanan1" id="pesanan01" checked>
            <label class="form-check-label" for="pesanan01">
              Selesai Dibuat
            </label>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
