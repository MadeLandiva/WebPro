<?php

function TentangAplikasi(){
    echo "<h3>Aplikasi APAsaja</h3>";
    echo "<sup>Versi 1.0</sup>";
}

function cetaklabel01($tx){
    echo "Isi label: ". $tx;
}

function cetaklabel02($tx="isikan label"){
    echo "Isi label: ". $tx;
}

function jumlahkan($angka1=0, $angka2=0){
    return $angka1+$angka2;
}
