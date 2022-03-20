<?php 

include_once "koneksi.php";

$nim = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

mysqli_query($connection, "INSERT INTO penduduk VALUES ('$nim', '$nama', '$jk', '$alamat')")

?>