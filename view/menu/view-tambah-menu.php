<?php
require('../../functions.php');
 session_start();
 if (!isset($_SESSION["id_pegawai"])) {
     header("Location: ../../index.php?error=4");
 }

dbConnect();

nav("Tambah Menu");
?>
<style>
    .gambar {
        max-width: 250px;
        max-height: 250px;
    }
</style>

<!--BODY-->
<body>
    <div class="container-fluid mt-4" align="center">
        <h1>Tambah Menu</h1>
            <table class="table-sm">
                <tr>
                    <td width="25%">ID Menu</td>
                    <td width="50%"><input type="text" id="txt_id" name="idMenu" class="form-control" placeholder="Masukan ID Menu" required></td>
                </tr>
                <tr>
                    <td>Nama Menu</td>
                    <td><input type="text" id="txt_nama" name="nama" class="form-control" placeholder="Masukan Nama Menu" required></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><input type="text" id="txt_desc" name="deskripsi" class="form-control" placeholder="Masukan Deskripsi Menu" required></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" id="txt_harga" name="harga" class="form-control" placeholder="Masukan Harga Menu" required></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" id="txt_stok" name="stok" class="form-control" placeholder="Masukan Stok Menu" required></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file" name="gambar" class="form-control" id="file" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right">
                        <img align="left" class="gambar mb-3" src="default.jpg" alt="Pilih Gambar" id="gambar" onError="$(this).hide();">
                        <a href="view-lihat-menu.php" class="btn btn-secondary">Batal</a>
                        <input type="submit" name="TblSimpan" value="Simpan" class="btn btn-success" onclick="addData()">
                    </td>
                </tr>
            </table>
    </div>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#gambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#file").change(function() {
        $('#gambar').show();
        readURL(this);
    });

    function addData() {
        let id = $("#txt_id").val();
        let name = $("#txt_nama").val();
        let desc = $("#txt_desc").val();
        let harga = $("#txt_harga").val();
        let stock = $("#txt_stok").val();
        let image = $("#file").val();

        if (id == "") {
            swal.fire({
                title: "Error!",
                text: "ID Menu Tidak boleh kosong",
                icon: "info",
                button: "OK!",
            })
            return false;
        } else if (name == "") {
            swal.fire({
                title: "Error!",
                text: "Nama Menu Tidak boleh kosong",
                icon: "info",
                button: "OK!",
            })
            return false;
        } else if (desc == "") {
            swal.fire({
                title: "Error!",
                text: "Deskripsi Menu Tidak boleh kosong",
                icon: "info",
                button: "OK!",
            })
            return false;
        } else if (harga == "") {
            swal.fire({
                title: "Error!",
                text: "Harga Menu Tidak boleh kosong",
                icon: "info",
                button: "OK!",
            })
            return false;
        } else if (stock == "") {
            swal.fire({
                title: "Error!",
                text: "Stock Menu Tidak boleh kosong",
                icon: "info",
                button: "OK!",
            })
            return false;
        }
        $.ajax({
            data: "idMenu=" + id + "&nama=" + name + "&deskripsi=" + desc + "&harga=" + harga + "&stok=" + stock + "&gambar=" + image,
            url: "crud/tambah-menu.php",
            type: "POST",
            success: function (response) {
                if (response==1) {
                    swal.fire({
                        title: "Berhasil",
                        text: "Berhasil memasukan data!",
                        icon: "success",
                        button: "OK!",
                    })
                        .then((value) => {
                            location.href = "view-lihat-menu.php";
                        });

                } else {
                    swal.fire({
                        title: "Gagal",
                        text: "Gagal memasukan data!",
                        icon: "error",
                        button: "OK!",
                    })
                        .then((value) => {
                            location.href = "view-lihat-menu.php";
                        });
                }
            },
        });
    }
</script>
</body>
