<?php 

include_once "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamt = $_POST['alamat'];

mysqli_query($connection, "INSERT INTO penduduk VALUES ('$nim', '$nama', '$jk', '$alamt')")

?>