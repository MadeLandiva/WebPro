<?php
    include("../konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    if($cnn){
        
        $sql = "CREATE DATABASE " . DBNAME;
        $hsl = mysqli_query($cnn, $sql);
        if($hsl){
            echo "Database ". DBNAME . " berhasil dibuat";
        }else{
            echo "Database ". DBNAME . " gagal dibuat";
        }


    }else{
        echo "koneksi ke dbms mysql gagal";
    }
    mysqli_close($cnn);