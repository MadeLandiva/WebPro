<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>

<div id="pesan">Pesan singkat</div>

<script sec="javascript.js"></script>

<script>
    document.write("Menulis dengan javascript")
    document.getElementById("pesan").innerHTML = "Mengganti tulisan pesan singkat";
    document.getElementById("pesan").style.color = "#ff0000";
</script>
    
</body>
</html>