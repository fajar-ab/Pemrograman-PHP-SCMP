<?php 

include_once "koneksi.php";


if (isset($_POST['login'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    
    $sql = "SELECT nik, nama FROM penduduk WHERE nik = '$nik' AND nama = '$nama'";
    $hasil = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($hasil);

    if (mysqli_num_rows($hasil) > 0) {
        echo "SUKSES";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="" method="post">
        <ul>
            <li>
                <label for="nik">Nik</label>
                <input type="text" name="nik" id="nik">
            </li>
            <li>
            <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>

</body>
</html>