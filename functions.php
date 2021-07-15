<?php
  function dbConnect() {
      $db = new mysqli("localhost", "root", "", "kopiHub");
      return $db;
  }

  // Query Lihat Pesanan
  function getPesanan() {
      $db = dbConnect();
      $sql = "SELECT * FROM pesanan";
      return $db->query($sql);
  }

  function banner() {
      ?>
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
  </div>
</nav>
    <?php
  }

