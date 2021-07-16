<?php
require('../../functions.php');

nav("Lihat Menu");

dbConnect();
$data = getMenu()->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
 <title>BARISTA</title></head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<aside class="sidebar">
        <menu>
          <ul class="menu-content">
         
            <li>
              <a href="menu.html"><i class="fa fa-cube"></i> <span>Menu</span> </a>
            </li>
            <li><a href="pesanan.html"><i class="fa fa-shopping-basket"></i> <span>Pesanan</span></a></li>
            
			  <li>
              <a href="#"><i class="fa fa-cube"></i> <span>Log Out</span> </a>
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

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</div>
      </section>
    </div>


</body>
</html>