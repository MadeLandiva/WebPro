<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>

<form action="">
    <div>
        Nama Lengkap
        <input type="text" id="txNAMA" placeholder="Nama Lengkap" name="txNAMA">
    </div>
    <div>
        <button type="button" onclick="checknama()">CheckNama</button>
    </div>
</form>

<script>
    function checknama(){
        let nm= document.getElementById("txNAMA").value;
        alert("isi dari field txNAMA: "+nm);
    }
</script>
    
</body>
</html>