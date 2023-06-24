<?php

// PHP Multidimensional Array

$mhs = array(
    array("Nama"=>"Boboiboy","ID"=>"1234","Kota"=>"Durian Runtuh"),
    array("Nama"=>"Jarjit","ID"=>"3224","Kota"=>"Malang"),
    array("Nama"=>"Susanti","ID"=>"5542","Kota"=>"Jakarta"),
    array("Nama"=>"Patrik","ID"=>"5423","Kota"=>"Bikini Button"),
);

// echo $mhs[0]["Nama"];

// echo "<hr>";

// print_r($mhs);

// echo "<hr>";

/* foreach($mhs as $dta){

    foreach($dta as $lb => $nval){
        echo $lb . ":" . $nval . "<br>";
    };

    echo "<br>";

}; */

header("Content-type: application/json");
echo json_encode($mhs);