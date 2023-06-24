<?php
    $dta [0]["NIM"] = "2233445566";
    $dta [0]["NAMA"] = "I Made Landiva";
    $dta [0]["JKEL"] = "L";
    $dta [0]["KLS"] = "M";
    $dta [0]["JURUSAN"] = "TI-MDI";
    $dta [0]["TGLAHIR"] = "2003-11-15";

    $dta [1]["NIM"] = "2201010591";
    $dta [1]["NAMA"] = "I Made sugra";
    $dta [1]["JKEL"] = "L";
    $dta [1]["KLS"] = "M";
    $dta [1]["JURUSAN"] = "TI-MDI";
    $dta [1]["TGLAHIR"] = "2004-10-11";

    $dta [2]["NIM"] = "2201010610";
    $dta [2]["NAMA"] = "I Wayan Manik";
    $dta [2]["JKEL"] = "L";
    $dta [2]["KLS"] = "M";
    $dta [2]["JURUSAN"] = "TI-MDI";
    $dta [2]["TGLAHIR"] = "2003-5-12";

    $dta [3]["NIM"] = "2201010581";
    $dta [3]["NAMA"] = "Ni Made Atyana";
    $dta [3]["JKEL"] = "P";
    $dta [3]["KLS"] = "M";
    $dta [3]["JURUSAN"] = "TI-MDI";
    $dta [3]["TGLAHIR"] = "2003-7-25";

    $dta [4]["NIM"] = "2201010599";
    $dta [4]["NAMA"] = "Ni Manik Wastika";
    $dta [4]["JKEL"] = "P";
    $dta [4]["KLS"] = "M";
    $dta [4]["JURUSAN"] = "TI-MDI";
    $dta [4]["TGLAHIR"] = "2003-4-13";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);