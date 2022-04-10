<?php 

include_once "koneksi.php";

$id = $_GET['id'];

$sql = "SELECT * FROM penduduk WHERE id='$id'";
$tampil = mysqli_query($connection, $sql);

$data = mysqli_fetch_row($tampil);

$nik = $data[1];
$nama = $data[2];
$jk = $data[3];
$alamat = $data[4];

// var_dump($data); die;

?>


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

        <h2>Update Data Penduduk</h2>

        <a href="index.php" id="kembali">kembali</a>
    
        <form class="input-data" action="update.php" method="POST" autocomplete="off">

            <input type="hidden" name="id" id="" value="<?= $id; ?>">

            <label for="nik">Nik</label>
            <input type="text" name="nik" id="nik" required value="<?= $nik; ?>">
            
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required value="<?= $nama; ?>">
            
            <label>Jenis Kelamin</label>
            <span>
                <?php if ($jk === 'L') : ?>
                    <input type="radio" name="jk" id="laki" value="L" required checked> 
                    <label for="laki"> 🧑 laki-laki</label>
                    <br>
                    <input type="radio" name="jk" id="perempuan" value="P" required>
                    <label for="perempuan"> 👧 perempuan</label>
                <?php elseif ($jk === 'P') : ?>
                    <input type="radio" name="jk" id="laki" value="L" required> 
                    <label for="laki"> 🧑 laki-laki</label>
                    <br>
                    <input type="radio" name="jk" id="perempuan" value="P" required checked>
                    <label for="perempuan"> 👧 perempuan</label>
                <?php endif; ?>
            </span>
            
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" required value="<?= $alamat; ?>">
            
            <button type="submit"> update</button>
        </form>
        
    </div>

</body>
</html>