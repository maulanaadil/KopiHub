<?php
function dbConnect()
{
  $db = new mysqli("localhost", "root", "", "kopiHub");
  return $db;
}

// Query Lihat Pesanan yang Belum
function getPesananSelesai()
{
    $db = dbConnect();
    $sql = "SELECT * FROM pesanan WHERE status_pesanan = 'selesai'";
    return $db->query($sql);
}

// Query Lihat Pesanan yang Belum
function getPesananBelum()
{
    $db = dbConnect();
    $sql = "SELECT * FROM pesanan WHERE status_pesanan = 'belum'";
    return $db->query($sql);
}

// Query Lihat Pesanan
function getPesanan()
{
    $db = dbConnect();
    $sql = "SELECT * FROM pesanan";
    return $db->query($sql);
}

// Query Count Pesanan dengan status_pesanan = selesai
function countPesananSelesai() {
    $db = dbConnect();
    $sql = "SELECT COUNT(*) FROM pesanan WHERE status_pesanan = 'selesai'";
    return $db->query($sql);
}

// Query Count Pesanan dengan status_pesanan = belum
function countPesananBelum() {
    $db = dbConnect();
    $sql = "SELECT COUNT(*) FROM pesanan WHERE status_pesanan = 'belum'";
    return $db->query($sql);
}

// Query update Pesanan
function updatePesanan($no_pesanan, $status_pesanan) {
    return "UPDATE pesanan SET pesanan.status_pesanan= '$status_pesanan' WHERE pesanan.no_pesanan = '$no_pesanan'";
}

// Query Tambah Pesanan
function addPesanan($noMeja, $statusPesanan, $jumlahPesanan, $subTotal)
{
  return "INSERT INTO pesanan(no_meja, status_pesanan, jumlah_pesanan, sub_total) VALUES ('$noMeja', '$statusPesanan', '$jumlahPesanan', '$subTotal')";
}

// Query Lihat Pesanan Khusus Dashboard Barista
function getPesananBarista()
{
  $db = dbConnect();
  $sql = "SELECT * FROM pesanan WHERE status_pesanan='belum'";
  return $db->query($sql);
}

function getDataPesanan($no_pesanan)
{
  $db = dbConnect();
  $sql = "SELECT * FROM pesanan WHERE no_pesanan = $no_pesanan";
  return $db->query($sql);
}

function getMenu()
{
  $db = dbConnect();
  $sql = "SELECT * FROM menu";
  return $db->query($sql);
}

function getDataMenu($id_menu)
{
  $db = dbConnect();
  $sql = "SELECT * FROM menu WHERE id_menu = '$id_menu'";
  return $db->query($sql);
}


function getLaporanHarian()
{
  $db = dbConnect();
  $sql = "SELECT id_pembayaran, total_harga, tanggal FROM pembayaran";
  return $db->query($sql);
}

function getTotalHarian()
{
  $db = dbConnect();
  $sql = "SELECT tanggal, SUM(total_harga) FROM pembayaran GROUP BY tanggal";
  return $result = $db->query($sql);
}

function getHapusMenu($id_menu)
{
  $db = dbConnect();

  $sql = "DELETE FROM menu WHERE id_menu = '$id_menu'";
  return $delete = $db->query($sql);

  if ($delete) {
    mysqli_close($db);
    header("location: view-lihat-menu.php");
    exit;
  } else {
    echo "Penghapusan menu gagal";
  }
}

function nav($title)
{
?>
  <!DOCTYPE html>
  <html>

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">

    <title><?php echo $title ?></title>
  </head>

  <nav class="navbar navbar-dark sticky-top" style="background-color: #293949">
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
