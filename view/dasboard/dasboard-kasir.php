<?php
require('../../functions.php');

nav("Lihat Pesanan");

dbConnect();
$data = getmenu()->fetch_all(MYSQLI_ASSOC);
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
        <li><a href="../pesanan/view-lihat-pesanan.php"><i class="fa fa-shopping-basket"></i> <span>Pesanan</span></a></li>
        <li><a href="#"><i class="fa fa-shopping-basket"></i> <span>Laporan</span></a></li>
        <li>
          <a href="../login/logout.php"><i class="fa fa-cube"></i> <span>Log Out</span> </a>
        </li>
      </ul>
    </menu>
  </aside>
  <section class="jumbotron">
    <h1 class="display-4">Kasir</h1>

  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </div>
  </section>
  </div>


</body>

</html>