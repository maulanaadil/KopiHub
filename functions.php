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

function nav($title)
{
?>
  <!DOCTYPE html>
  <html>

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo $title ?></title>
  </head>

  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">KopiHub</a>
    </div>
  </nav>
<?php
}
?>