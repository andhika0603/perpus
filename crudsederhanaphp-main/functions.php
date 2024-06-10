<?php
error_reporting (E_ALL ^ E_NOTICE);
require 'createdb.php';

$connect = mysqli_connect($host, $user, $pass, $dbName);

function query($query) {
    global $connect;
    $jadi = mysqli_query($connect, $query);
    return $jadi;
}

function query_getData($query){
    global $connect;
    $select = mysqli_query($connect, $query); //select * data
    $view = [];
    while ( $row = mysqli_fetch_assoc($select)) {
        $view[] = $row;
    }
    return $view; 
}

function tambah($data){
    global $connect;
    $nohp = $data["nohp"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $kota_asal = htmlspecialchars($data["kota_asal"]);

    $nohpCheck = query("SELECT nohp FROM pengunjung WHERE nohp = '$nohp'");
    if (mysqli_fetch_assoc($nohpCheck)) {
        echo "<script>
            alert('No. HP sudah ada!');
            </script>";
            return false;
    }

    mysqli_query($connect,"INSERT INTO pengunjung VALUES
        ('', '$nohp', '$nama', '$email', '$kota_asal')");

    return mysqli_affected_rows($connect);
}

function update($data){
    global $connect;

    $id = $data["id"];
    $nohp = $data["nohp"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $kota_asal = htmlspecialchars($data["kota_asal"]);

    mysqli_query($connect, "UPDATE pengunjung SET nohp ='$nohp', nama = '$nama', email = '$email', kota_asal = '$kota_asal' WHERE idPengunjung = $id");
    
    return mysqli_affected_rows($connect);
}

function delete($data){
    global $connect;
    $id = $data;
    mysqli_query($connect,"DELETE FROM pengunjung WHERE idPengunjung = $data");
    return mysqli_affected_rows($connect);
}
?>
