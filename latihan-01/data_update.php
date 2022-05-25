<?php 

require_once "koneksi.php";

$nik_lama = $_POST['nik_lama'];
$nik = htmlspecialchars($_POST['nik']);
$nama = htmlspecialchars($_POST['nama']);
$jk = $_POST['jk'];
$alamat = htmlspecialchars($_POST['alamat']);
$pendidikan = $_POST['pendidikan'];

// update data database berdasarkan
$sql = "UPDATE penduduk
        SET
        nik = '$nik',
        nama = '$nama',
        jenis_kelamin = '$jk',
        alamat = '$alamat',
        pendidikan = '$pendidikan'
        WHERE nik = '$nik_lama'
    ";

mysqli_query($koneksi, $sql);

// tampilkan pesan
if (mysqli_affected_rows($koneksi) > 0) {
    popup("data berhasil di update", "index.php");
} else {
    popup("data gagal di diupdate");
}


?>