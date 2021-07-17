<?php
require('../../functions.php');

nav("Laporan harian");
dbConnect();
$data = getLaporanHarian()->fetch_all(MYSQLI_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan pendapatan harian</title>
</head>
<body>
     <div class="row mt-3">
     <h3>Laporan Pendapatan Harian</h3>
     </div>
     <center>
          HARI KE 1
            <form action="tambah.php" method="post" class="mt-5" runat="server">
                <table class="table-sm">
                    <tr>
                        <td width="50%"><form action="/action_page.php">
                         <input type="date" id="birthday" name="birthday"></form></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="nama" class="form-control" placeholder="input data" ></td>
                    </tr>
                   
                        <td></td>
                    </tr>
                </table>
            </form>

            HARI KE 2
            <form action="tambah.php" method="post" class="mt-5" runat="server">
                <table class="table-sm">
                    <tr>
                        <td width="50%"><form action="/action_page.php">
                         <input type="date" id="birthday" name="birthday"></form></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="nama" class="form-control" placeholder="input data" ></td>
                    </tr>
                   
                        <td></td>
                    </tr>
                </table>
            </form>
            HARI KE 3
            <form action="tambah.php" method="post" class="mt-5" runat="server">
                <table class="table-sm">
                    <tr>
                        <td width="50%"><form action="/action_page.php">
                         <input type="date" id="birthday" name="birthday"></form></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="nama" class="form-control" placeholder="input data" ></td>
                    </tr>
                   
                        <td></td>
                    </tr>
                </table>
            </form>
            HARI KE 4
            <form action="tambah.php" method="post" class="mt-5" runat="server">
                <table class="table-sm">
                    <tr>
                        <td width="50%"><form action="/action_page.php">
                         <input type="date" id="birthday" name="birthday"></form></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="nama" class="form-control" placeholder="input data" ></td>
                    </tr>
                   
                        <td></td>
                    </tr>
                </table>
            </form>HARI KE 5
            <form action="tambah.php" method="post" class="mt-5" runat="server">
                <table class="table-sm">
                    <tr>
                        <td width="50%"><form action="/action_page.php">
                         <input type="date" id="birthday" name="birthday"></form></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="nama" class="form-control" placeholder="input data" ></td>
                    </tr>
                   
                        <td></td>
                    </tr>
                </table>
            </form>
            HARI KE 6
            <form action="tambah.php" method="post" class="mt-5" runat="server">
                <table class="table-sm">
                    <tr>
                        <td width="50%"><form action="/action_page.php">
                         <input type="date" id="birthday" name="birthday"></form></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="nama" class="form-control" placeholder="input data" ></td>
                    </tr>
                   
                        <td></td>
                    </tr>
                </table>
            </form>
            HARI KE 7
            <form action="tambah.php" method="post" class="mt-5" runat="server">
                <table class="table-sm">
                    <tr>
                        <td width="50%"><form action="/action_page.php">
                         <input type="date" id="birthday" name="birthday"></form></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="nama" class="form-control" placeholder="input data" ></td>
                    </tr>
                   
                        <td></td>
                    </tr>
                </table>
            </form>
            <td align="right">
                            <a href="view-lihat-menu.php" class="btn btn-secondary">Batal</a>
                            <input type="submit" name="TblSimpan" value="Simpan" class="btn btn-success">
                        </td>
                        <HR>
                        
        </center>


</body>
</html>
