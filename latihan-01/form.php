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
    
    <form name="FDAFTAR" action="simpan.php" method="POST">
        <label for="nim">NIM: </label>
        <input type="text" name="nim" id="nim">
        <label for="nama">Nama </label>
        <input type="text" name="nama" id="nama">
        <label for="jk">Jenis Kelamin</label>
        <input type="text" name="jk" id="jk">
        <label for="alamat">Alamat </label>
        <input type="text" name="alamat" id="alamat">
        <button type="submit" name="submit">DAFTAR</button>
    </form>
    
</body>
</html>