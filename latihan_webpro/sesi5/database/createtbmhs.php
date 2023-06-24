<?php
    include("koneksi.php");

    $tbel = "CREATE TABLE tbMHS(
        id int AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(30),
        nim VARCHAR(10),
        prodi VARCHAR(20),
        jenis_kelamin VARCHAR(1),
        tgl_lahir DATE,
        id_mhs VARCHAR(20)
    );";

    $hsl = mysqli_query($cnn , $tbel);
    if($hsl){
        echo "tabel tbMHS ==> sukses";
    }else{
        echo "tabel tbMHS ==> gagal";
    }