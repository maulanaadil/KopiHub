<?php
require("../../../functions.php");
session_start();
if (!isset($_SESSION["id_pegawai"])) {
    header("Location: ../../index.php?error=4");
}


//TODO: MASIH ADA BUG PAS CRUD MENU

nav("Tambah Menu");

    $db = dbConnect();
    $idMenu = $db->escape_string($_POST['idMenu']);
    $namaMenu = $db->escape_string($_POST['nama']);
    $harga = $db->escape_string($_POST['harga']);
    $stok = $db->escape_string($_POST['stok']);
    $deskripsi = $db->escape_string($_POST['deskripsi']);
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    if ($gambar == "") {
        $gambarbaru = "";
    } else {
        $gambarbaru = "KopiHub Image" . date(' d-m-y ') . $gambar;
    }

    // path folder gambar
    $path = "../images/" . $gambarbaru;

    $sql = "INSERT INTO menu
            VALUES ('$idMenu','$namaMenu','$harga','$stok','$gambarbaru', '$deskripsi')";

    $res = $db->query($sql);
    move_uploaded_file($tmp, $path);
    if ($db->affected_rows > 0) {
        echo 1;
    } else {
        echo 0;
    }
