<?php

    // PHP indexed Arrays 
    // Model 1
    $cars = array("Volvo","BMW","Toyota");

    $jmldata = count($cars);
    echo "Jumlah data adalah: ". $jmldata. "<br><br>";
    for($i=0;$i<3;$i++){
        echo "Kendaraan ". $cars[$i], "<br>";
    }

    echo "<hr>";

    echo "<ol class='mobil'>";
    foreach($cars as $dta){
        echo "<li> Kendaraan ". $dta. "</li>";
    }
    echo "</ol>";
