<?php
require 'functions.php';

$id = $_GET["id"];

$dataMhs = query_getData("SELECT * FROM pengunjung WHERE idPengunjung = $id");
if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "<script>
        alert('Data berhasil diubah! ☺');
        document.location.href='dataMhs.php';
        </script>";
    }else {
        echo "<script>
        alert('Data Gagal Diubah!');
        </script>";
        var_dump($connect);
    }
}
if (isset($_POST["batal"])) {
    header("Location: dataPgn.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Ubah</title>
    <style>
    body,html {
        background-image: url("bghome.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        height: 100%;
        margin: 0;
    }
    </style>
</head>

<body>
    <div class="container" style="height: 100%;" align="center">
        <table border="0" style="width: 50%;">
            <thead style="height: 5%" align="center">
                <tr style="height: 10%">
                    <td>
                        <h2 style="font-family: 'Lucida Sans'">Ubah data</h2>
                    </td>
                </tr>
            </thead>
            <tbody align="center">
                <tr style="height: 70%">
                    <td>
                        <form method="post" action="" align="left" style="width: 80%; padding: 20px; border: 0px solid #f1f1f1; background-color: rgba(0, 0, 51, 0.2);">
                            <input class="form-control" type="hidden" name="id" value="<?= $dataPgn[0]["idPengunjung"] ?>">
                            <div class="form-group">
                                <input type="number" class="form-control" id="nohp" name="nohp" placeholder="No. HP" required 
                                value="<?= $dataPgn[0]["nohp"] ?>">
                                <small id="nohpHelp" class="form-text">Masukan no. HP.</small>
                            </div>
                            <div class="form-group">
                                <input type="namespace" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required
                                value="<?= $dataPgn[0]["nama"] ?>">
                                <small id="nameHelp" class="form-text">Masukkan Nama lengkap. </small>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                value="<?= $dataPgn[0]["email"] ?>">
                                <small id="emailHelp" class="form-text">Masukan email.</small>
                            </div>
                            <input type="text" class="form-control" id="kota_asal" name="kota_asal" placeholder="Kota Asal" required
                            value="<?= $dataPgn[0]["kota_asal"] ?>">
                            <small id="kota_asalHelp" class="form-text">Masukan asal kota.</small>
                            <br />
                            </div>
                            <div align="right">
                                <button type="submit" class="btn btn-dark" name="batal">Batalkan</button>
                                <button type="submit" class="btn btn-dark" name="submit">Ubah Data</button>
                            </div>
                        </form>
                    </td>
                </tr>
            <tr>
                <td></td>
            </tr>
            </tbody>
            <tfoot style="height: 5%;" align="center">
                <tr>
                    <td style="font-family: 'Courier New', Courier, monospace; font-size: 8pt; padding-top: 10px">Perpustakaan Nasional</td>
                </tr>
            </tfoot>
        </table>
    </div>
 </body>

</html>
