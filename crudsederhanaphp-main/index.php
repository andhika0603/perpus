<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambah! ☺');
        document.location.href= 'index.php';
        </script>";
    }else {
        echo "<script>
        alert('Data Gagal Ditambahkan!');
        document.location.href= 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <style>
    body,html {
        background-image: url("bghome.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#option" aria-controls="option"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="option">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dataPgn.php">Daftar Pengunjung<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="height: 100%;" align="center">
        <table border="0" style="width: 50%;">
            <thead style="height: 5%" align="center">
                <tr style="height: 10%">
                    <td>
                        <br>
                        <h2 style="font-family: 'Lucida Sans'">Masukan data diri</h2>
                        <h10 style="font-family: 'Lucida Sans'">Silahkan isi data dengan benar</h10>
                    </td>
                </tr>
            </thead>
            <tbody align="center">
                <tr style="height: 70%">
                    <td>
                        <form method="post" action="" align="left" style="width: 80%; padding: 20px; border: 0px solid #f1f1f1; background-color: rgba(0, 0, 51, 0.2);">
                            <div class="form-group">
                                <input type="number" class="form-control" id="nohp" name="nohp" placeholder="No. HP" required>
                                <small id="nohpHelp" class="form-text">Masukan nomor telepon.</small>
                            </div>
                            <div class="form-group">
                                <input type="namespace" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                                <small id="nameHelp" class="form-text">Nama lengkap.</small>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                <small id="emailHelp" class="form-text">Masukan email.</small>
                            </div>
                            <input type="text" class="form-control" id="kota_asal" name="kota_asal" placeholder="Kota Asal" required>
                            <small id="kota_asalHelp" class="form-text">Masukan asal kota.</small>
                            <br />
                            </div>
                            <div align="right">
                                <button type="submit" class="btn btn-dark" name="submit">Tambah Data</button>
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