<?php
include 'createdb.php';
require 'functions.php';

$show = query_getData("SELECT * FROM pengunjung");

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="style.css">
    <title>Data Pengunjung</title>
    <script>
        document.getElementById("title_hover").innerHTML="Test";
    </script>
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
                <li class="nav-item">
                    <a class="nav-link" href="dataMhs.php">Daftar Pengunjung<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <table border="0" align="center" cellpadding="10" cellspacing="0"> 
        <thead  align="center">
            <tr>
                <th><h3>Daftar Pengunjung</h3></th>
            </tr>
            <tr style="width: 50%">
                <td >
                </td>
            </tr>
        </thead>

        <tbody>
            <td style="width: 97%">
                <table class="table table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>LANGKAH</th>
                            <th>NOHP</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>ASAL</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php if (!$show) 
                            echo "<tr>
                            <td colspan='9' align='center'>Data Masih Kosong...</td></tr>";?>
                        <?php foreach($show as $row): ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><a href="ubah.php?id=<?= $row["idPengunjung"]; ?>" class="btn btn-outline-warning" role="button" aria-pressed="active">ubah</a>  
                                <a href="hapus.php?id=<?= $row["idPengunjung"]; ?>" class="btn btn-outline-danger" role="button" aria-pressed="active">hapus</a></td>
                            <td><?= $row["nohp"] ?></td>
                            <td><?= $row["nama"] ?></td>
                            <td><?= $row["email"] ?></td>
                            <td><?= $row["kota_asal"] ?></td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </td>
        </tbody>

        <tfoot align="center">
            <td style="font-family: 'Courier New', Courier, monospace; font-size: 10pt">Perpustakaan Nasional</td>
        </tfoot>
    </table>
</body>

</html>
