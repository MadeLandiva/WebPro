<?php

// PHP Associiative Arrays
// Model 1
$age = array("Petter"=>"35", "Ben"=>"37", "Joe"=>"43");

echo "Umur dari Petter ".$age["Petter"]. " tahun<br>";

echo "<hr>";

foreach($age as $x => $umur){
    echo "Umur dari ". $x. " adalah ". $umur. "<br>";
}