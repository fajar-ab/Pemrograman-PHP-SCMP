<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">

        <h2>Input Data Penduduk</h2>

        <a href="index.php" id="kembali">kembali</a>
    
        <form class="input-data" action="simpan.php" method="POST" autocomplete="off">
            <label for="nik">Nik</label>
            <input type="text" name="nik" id="nik" required>
            
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required>
            
            <label>Jenis Kelamin</label>
            <span>
                <input type="radio" name="jk" id="laki" value="L" required> 
                <label for="laki"> 🧑 laki-laki</label>
                <br>
                <input type="radio" name="jk" id="perempuan" value="P" required>
                <label for="perempuan"> 👧 perempuan</label>
            </span>
            
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" required>
            
            <button type="submit"> daftar</button>
        </form>
        
    </div>

</body>
</html>