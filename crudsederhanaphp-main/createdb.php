<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "kampus";

    $konek = mysqli_connect($host,$user,$pass); //koneksi ke sqlnya
    if (!$konek) {
        die("gagal koneksi...");
    }

    $pilihDB = mysqli_select_db($konek,$dbName); //pilih database
    if (!$pilihDB) {
        $pilihDB = mysqli_query($konek,"CREATE DATABASE $dbName"); //buat database
        if (!$pilihDB) {
            die("gagal buat database...");
        }else {
            $pilihDB = mysqli_select_db($konek,$dbName); //pilih database
            if (!$pilihDB) {
                die("gagal koneksi ke database...");
            }
        }
    }

    $sqlTabelPengunjung = "create table if not exists pengunjung (
                            idPengunjung int auto_increment not null primary key,
                            nohp char(14) not null,
                            nama varchar(30) not null,
                            email varchar(30),
                            kota_asal varchar(30) not null,
                            KEY(nohp))";
    mysqli_query($konek,$sqlTabelPengunjung) or die("gagal buat tabel pengunjung."); //membuat tabel pengunjung
?>