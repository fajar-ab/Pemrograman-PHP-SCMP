<?php  
include_once "koneksi.php";

$sql = "SELECT * FROM penduduk WHERE nama LIKE 'f%'";
$tampil = mysqli_query($connection, $sql);


$temp = [];
while($data = mysqli_fetch_row($tampil)) {
    $nik = $data[0];
    $nama = $data[1];
    $jk = $data[2];
    $alamat = $data[3];


    echo $nik;
    echo $nama;
    echo $jk;
    echo $alamat;
    echo "<br>";
}