<?php require ('../../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
     <?php nav("Tambah Pesanan"); ?>

</head>
<body>
<form method="post" action="./crud/tambah-pesanan.php">
<h1 align="center">Tambah Pesanan</h1>
    <table align="center" class="table-sm">
        <tr>
            <td width="25%">No Meja</td>
            <td width="25%"><input type="text" id="no_meja" name="noMeja" class="form-control"></td>
        </tr>
        <tr>
            <td width="25%">Status Pesanan</td>
            <td width="25%">
                <select class="form-select" id="status_pesanan" name="status_pesanan">
                    <option value="">Pilih Kondisi</option>
                    <option value="belum">Belum</option>
                    <option value="selesai">Selesai</option>
                </select>
            </td>
        </tr>
        <tr>
            <td width="25%">Jumlah Pemesanan</td>
            <td><input type="number" id="jumlah_pemesanan" name="jumlah_pemesanan" class="form-control"></td>
        </tr>
        <tr>
            <td width="25%">SubTotal</td>
            <td><input type="number" name="subTotal" id="sub_total" class="form-control"></td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <input type="reset" value="Reset" class="btn btn-danger">
                <input type="submit" value="Submit" class="btn btn-success" name="btnSubmit">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

