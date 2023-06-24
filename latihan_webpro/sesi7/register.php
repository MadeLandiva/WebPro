<?php
    include("cmd/user.php");
    $psn ="";
    // cek pengiriman form
    if(isset($_POST["txPASS1"])){

        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS1"];

            if (createuser($nama, $email, $user, $pass)){
                $psn ="Create data user sukses";
            }else{
                $psn ="Create data user gagal";
            }

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="register.php" class="container mt-5 p-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; width:50%">
    <?php
        echo "<div>$psn</div>";
    ?>
    <h3 class="text-center">Form Register</h3>
    <div class="mt-2">
        Nama Lengkap
        <input type="text" name="txNAMA" class="form-control form-control-sm">
    </div>
    <div class="mt-2">
        Email
        <input type="email" name="txEMAIL" class="form-control form-control-sm">
    </div>
    <div class="mt-2">
        User Name
        <input type="text" name="txUSER" class="form-control form-control-sm">
    </div>
    <div class="mt-2">
        Password
        <input type="password" name="txPASS1" class="form-control form-control-sm">
    </div>
    <div class="mt-2">
        Verifikasi Password
        <input type="password" name="txPASS2" class="form-control form-control-sm">
    </div>
    <div class="mt-3">
        <button type="submit">Register</button>
    </div>
</form>


</body>
</html>