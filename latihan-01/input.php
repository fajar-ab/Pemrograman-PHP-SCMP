<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <form class="daftar" action="simpan.php" method="POST" autocomplete="off">
        <label for="nik">Nik</label>
        <input type="text" name="nik" id="nik">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <fieldset>
            <legend>Jenis Kelamin</legend>
            <label for="laki">
                <input type="radio" name="jk" id="laki" value="L"> laki-laki
            </label>
            <label for="perempuan">
                <input type="radio" name="jk" id="perempuan" value="P"> perempuan
            </label>
        </fieldset>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <button type="submit">Daftar</button>
    </form>
    
</body>
</html>