<?php

require('../../functions.php');

nav("Hapus Menu");
dbConnect();
?>
<body>
    <?php
        if(isset($_GET['id_menu']))
        {
            $id_menu = dbConnect()->escape_string($_GET['id_menu']);
            if($dataHapus = getHapusMenu($id_menu))
            {
                ?>
                <center>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>Penghapusan selesai</p>
                    <a href="view-lihat-menu.php" class="btn btn-primary">Kembali</a>
                </div>
                </center>
                <?php
            }else
            {
                echo "Id produk tidak ditemukan";
            }
        }else
        {
            echo "Id produk tidak ada";
        }


    ?>
</body>
</html>


