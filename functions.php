<?php
function dbConnect()
{
  $db = new mysqli("localhost", "root", "", "kopiHub");
  return $db;
}

// Query Lihat Pesanan
function getPesanan()
{
  $db = dbConnect();
  $sql = "SELECT * FROM pesanan";
  return $db->query($sql);
}

function getMenu()
{
  $db = dbConnect();
  $sql = "SELECT * FROM menu";
  return $db->query($sql);
}

function getLaporanHarian()
{
  $db = dbConnect();
  $sql = "SELECT id_pembayaran, total_harga, tanggal FROM pembayaran";
  return $db->query($sql);
}


function nav($title)
{
?>
  <!DOCTYPE html>
  <html>

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <title><?php echo $title ?></title>
  </head>

  <nav class="navbar navbar-dark" style="background-color: #293949">
    <div class="container-fluid">
      <a class="navbar-brand">KopiHub</a>
      <!-- <h5 style="color: white;">Halo, <?= $_SESSION["nama"]; ?></h5> -->
    </div>
  </nav>
<?php
}

function showError($message)
{
?>
  <div style="background-color:#FAEBD7; padding:10px; border:1px solid red;" class="mt-3 ml-3 mr-3">
    <?php echo $message ?>
  </div>
<?php
}
?>