<?php

    $usr = "";
    $pass = "";
    if(isset($_GET["txUSER"])){
        $usr = $_GET ["txUSER"];
        $pass = $_GET ["pass"];
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form method GET</title>
</head>
<body>

<form method="GET" action="latihan01.php">
    <div>
        User Name 
        <input type="text" name="txUSER" required>
    </div>
    <div>
        Password 
        <input type="password" name="pass">
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