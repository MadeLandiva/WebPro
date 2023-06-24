<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>

    <form action="">
        Masukkan alas
        <input type="number" id="alas" placeholder="Massukkan alas"><br>

        masukkan tinggi
        <input type="number" id="tinggi" placeholder="Masukkan tinggi"><br>

        <button type="button" onclick="cekluas()">cek luas</button>
    </form>

    <div id="text"></div>
    

    <script>
        function cekluas(){
            let als = document.getElementById("alas").value;
            let tng = document.getElementById("tinggi").value;

            let luas = 0.5 * als *tng;

            alert("luas segitiga adalah:"+ luas);
            document.getElementById("text").innerHTML="hasil dari penjumlahan "+luas;
        }
    </script>
</body>
</html>