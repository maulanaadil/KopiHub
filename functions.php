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
      <div id="banner">
         <h2>Kopi Hub</h2>
         <hr>
     </div>
    <?php
  }

