<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Latihan1</title>
</head>
<body>

    <form class="container" action="latihan1.php" method="POST" onsubmit="return checkform(this)">
        <div class="mb-3">
            NIM
            <input class="form-control" type="text" name="txNIM" id="NIM">
        </div>
        <div class="mb-3">
            NAMA
            <input class="form-control"type="text" name="txNAMA" id="NAMA">
        </div>
        <div class="mb-3">
            Jenis Kelamin <br>
            <input type="radio" name="JK" id="jk" value="Laki-laki">Laki-laki <br>
            <input type="radio" name="JK" id="jk" value="Perempuan">Perempuan
        </div>
        <div class="mb-3">
            Jurusan
            <select name="txJurusan" id="jurusan">
                <option value="TI MDI">TI Manajemen Data dan Informasi</option>
                <option value="TI KAB">TI Komputer dan Akuntansi Bisnis</option>
                <option value="BD">Bisnis Digital</option>
                <option value="SK">Sistem Komputer</option>
            </select>
        </div>
        <div class="mb-3">
            Hobi <br>
            <input type="checkbox" name="txMancing" value="Mancing">Mancing <br>
            <input type="checkbox" name="txNyanyi" value="Nyanyi">Nyanyi <br>
            <input type="checkbox" name="txTidur" value="Tidur">Tidur <br>
            <input type="checkbox" name="txbelanja" value="Belanja">Belanja
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Kirim data</button>
        </div>

    </form>

    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            let nama = f.namedItem("txNAMA").value;
            let jk = f.namedItem("JK").value;
            let jurusan = f.namedItem("txJurusan").value;
            let hobi1 = [
                    f.namedItem("txMancing").checked,
                    f.namedItem("txNyanyi").checked,
                    f.namedItem("txTidur").checked,
                    f.namedItem("txbelanja").checked
                ]

            console.log ("NIM: "+nim);
            console.log ("NAMA: "+nama);
            console.log("Jenis Kelamin: "+jk);
            console.log("Jurusan: "+jurusan);
            console.log("Hobi: "+hobi1)

            return false;
        }
    </script>
    
</body>
</html>