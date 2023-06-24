<?php

    $usr = "";
    $pass = "";

    $eusr ="";
    $epass ="";

    if(isset($_POST["txUSER"])){
        $usr = $_POST ["txUSER"];
        $pass = $_POST ["pass"];

        if($usr ==""){
            $eusr ="<div style='color:red';font-size='10px'>Feild User Masih Kosong</div>";
            
        }
        if($pass ==""){
            $epass ="<div style='color:red';font-size='10px'>Feild Password Masih Kosong</div>";
           
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dengan Request Handle</title>
</head>
<body>

<form method="POST" action="latihan02.php">
    <div>
        User Name 
        <input type="text" name="txUSER">
        <?=$eusr;?>
    </div>
    <div>
        Password 
        <input type="password" name="pass">
        <?=$epass?>
    </div>
    <div>
        <button>login</button>
    </div>
</form>  

<div>
    Isi dari form<br>
        1. USer name: <?=$usr?><br>
        2. password: <?=$pass?>
</div>

    
</body>
</html>