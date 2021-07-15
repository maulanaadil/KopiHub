<?php
require('../../functions.php');

dbConnect();

nav("Tambah Menu");
?>

<body>
    <div class="container mt-4">
        <h1>Tambah Menu</h1>
        <center>
            <form action="tambah.php" method="post" class="mt-5">
                <table class="table-sm">
                    <tr>
                        <td width="25%">ID Menu</td>
                        <td width="50%"><input type="text" name="idMenu" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Nama Menu</td>
                        <td><input type="text" name="nama" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input type="text" name="harga" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><input type="number" name="stok" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td><input type="file" name="gambar" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="right">
                            <a href="view-lihat-menu.php" class="btn btn-secondary">Batal</a>
                            <input type="submit" name="TblSimpan" value="Simpan" class="btn btn-success">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </div>
</body>