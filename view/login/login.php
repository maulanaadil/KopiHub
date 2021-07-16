<?php
if (!isset($_SESSION["userid"])) {
    header("Location: index.php?error=4");
}

include("functions.php");

$db = dbConnect();
if ($db->connect_errno == 0) {
    if (isset($_POST['TblLogin'])) {
        $userid = $db->escape_string($_POST["userid"]);
        $password = $db->escape_string($_POST["password"]);

        $sql = "SELECT id_pegawai,nama,jabatan FROM pegawai
                WHERE id_pegawa = '$userid' and 
                      pass = md5('$password')";

        $res = $db->query($sql);
        if ($res) {
            if ($res->num_rows == 1) {
                $data = $res->fetch_assoc();

                session_start();
                $_SESSION["id_pegawai"] = $data["id_pegawai"];
                $_SESSION["nama"] = $data["nama"];
                $_SESSION["jabatan"] = $data["jabatan"];

                if ($_SESSION["jabatan"] == "pelayan") {
                    header("Location: view/dasboard/dasboard-pelayan.php");
                } else if ($_SESSION["jabatan"] == "kasir") {
                    header("Location: view/dasboard/dasboard-kasir.php");
                } else if ($_SESSION["jabatan"] == "barista") {
                    header("Location: view/dasboard/dasboard-barista.php");
                }
            } else
                header("Location: index.php?error=1");
        }
    } else
        header("Location: index.php?error=2");
} else
    header("Location: index.php?error=3");
