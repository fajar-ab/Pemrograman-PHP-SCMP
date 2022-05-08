<?php 

include_once "koneksi.php";

$keyword = $_POST['keyword'];

$sql = "SELECT * FROM penduduk WHERE nik = '$keyword'";
$tampil = mysqli_query($koneksi, $sql);


$data = mysqli_fetch_row($tampil);
if (is_null($data)) {
    echo <<<JS
        <script>
            alert('data tidak ditemukan')
            document.location.href = 'form_cari.php?cek=Update'
        </script>
    JS;
}

$nik = $data[0];
$nama = $data[1];
$jk = $data[2];
$alamat = $data[3];
$pendidikan = $data[4];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">

        <h2>Update Data Penduduk</h2>

        <ul>
            <li><a href="index.php">👈 kembali</a></li>
        </ul>
    
        <form class="input-data" action="data_update.php" method="POST" autocomplete="off">

            <input type="hidden" name="nik_lama" id="" value="<?= $nik; ?>">

            <label for="nik">Nik</label>
            <input type="text" name="nik" id="nik" required value="<?= $nik; ?>">
            
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required value="<?= $nama; ?>">
            
            <label>Jenis Kelamin</label>
            <span>
                <input type="radio" name="jk" id="laki" value="L" required> 
                <label for="laki">Laki-laki</label>
                <br>
                <input type="radio" name="jk" id="perempuan" value="P" required>
                <label for="perempuan">Perempuan</label>
            </span>
            
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" required value="<?= $alamat; ?>">

            <label>Pendidikan</label>
            <span>
                <input type="radio" name="pendidikan" id="sd" value="SD" required> 
                <label for="sd">SD</label>
                <br>
                <input type="radio" name="pendidikan" id="smp" value="SMP" required>
                <label for="smp">SMP</label>
                <br>
                <input type="radio" name="pendidikan" id="sma" value="SMA" required>
                <label for="sma">SMA</label>
                <br>
                <input type="radio" name="pendidikan" id="s1" value="S1" required>
                <label for="">S1</label>
            </span>
            
            <button type="submit">💾 update</button>
        </form>

    </div>

<script>
    const jenisKelamin = "<?= $jk ?>";
    const pendidikan = "<?= $pendidikan ?>";
</script>
<script src="js/script.js"></script>
</body>
</html>