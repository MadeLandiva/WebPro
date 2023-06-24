<?php

    $dta["NIM"] = "2233445566";
    $dta["NAMA"] = "I Made Landiva";
    $dta["JKEL"] = "L";
    $dta["KLS"] = "M";
    $dta["JURUSAN"] = "TI-MDI";
    $dta["TGLAHIR"] = "2003-11-15";


    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);
