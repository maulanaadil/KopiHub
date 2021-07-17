<?php
require('../../functions.php');
// session_start();
// if (!isset($_SESSION["id_pegawai"])) {
//     header("Location: ../../index.php?error=4");
// }

nav("Barista");

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
        <a href="../login/logout.php"><i class="fa fa-cube"></i> <span>Log Out</span> </a>
      </li>
    </ul>
  </menu>
</aside>
<section class="jumbotron">
  <h1 class="display-4">Barista</h1>
  <hr>
  <div class="row px-4">

      <?php foreach ($data as $row) { ?>

      <div class="col-sm-6">
          <div class="card" style="width: 18rem; margin-top: 20px">
              <div class="card-body">
                          <h5 class="card-title" align="center">No Pesanan <?= $row["no_pesanan"] ?></h5>
                          <hr>
                          <p class="card-text">Status Pesanan :</p>
                          <select class="form-select" id="status_pesanan">
                              <option value="" hidden><?= $row["status_pesanan"] ?></option>
                              <option value="belum">belum</option>
                              <option value="selesai">selesai</option>
                          </select>
                          <div class="btn-submit" align="right" style="margin-top: 20px">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                          </div>
              </div>
          </div>
      </div>
      <?php
      }
      ?>

  </div>
</section>
