<?php 

const HOSTNAME = "127.0.0.1";
const DATABASE = "scmp_latihan_php1";
const USERNAME = "root";
const PASSWORD = "";

$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
$message_connection = ($connection) ? "Database Berhasil Terkoneksi" : "Database Gagal Terkoneksi";

?>