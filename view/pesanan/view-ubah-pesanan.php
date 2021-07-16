<?php
require('../../functions.php');

$db = dbConnect();
$no_pesanan = $_GET["no_pesanan"];
$data = getDataPesanan($no_pesanan)->fetch_assoc();
?>
<!DOCTYPE html>
<html>

<head>
    <?php nav("Ubah Pesanan"); ?>

</head>

<body>
    <div class="container-fluid mt-4">
        <h1>Ubah Pesanan</h1>
        <form method="post">
            <input type="hidden" name="no_pesanan" value="<?= $data["no_pesanan"]; ?>">
            <table align="center" class="table-sm">
                <tr>
                    <td width="20%">No Meja</td>
                    <td width="40%"><input type="text" id="no_meja" name="noMeja" class="form-control" value="<?= $data["no_meja"]; ?>"></td>
                </tr>
                <tr>
                    <td>Status Pesanan</td>
                    <td>
                        <select class="form-select" id="status_pesanan">
                            <option value="">Pilih Kondisi</option>
                            <option value="belum">Belum</option>
                            <option value="selesai">Selesai</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Pemesanan</td>
                    <td><input type="number" id="jumlah_pemesanan" class="form-control" value="<?= $data["jumlah_pesanan"]; ?>"></td>
                </tr>
                <tr>
                    <td>SubTotal</td>
                    <td><input type="number" id="sub_total" class="form-control" value="<?= $data["sub_total"]; ?>"></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="reset" value="Reset" class="btn btn-danger">
                        <input type="submit" value="Submit" class="btn btn-success" onclick="doSave()">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>