<?php 

$hostname = "localhost";
$database = "scmp_latihan_php1";
$username = "root";
$password = "";

$koneksi = mysqli_connect($hostname, $username, $password, $database);
$cek_koneksi = ($koneksi) ? "database berhasil terkoneksi" : "database gagal terkoneksi";

// echo $cek_koneksi;

?>