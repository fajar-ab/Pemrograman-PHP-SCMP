<?php

require_once __DIR__ . '/../../config/koneksi.php';

// dapatkan koneksi database mysql
$koneksi = Database::getConnection();


function dataMatakuliah(): array
{
  global $koneksi;

  $sql = "SELECT * FROM tb_mata_kuliah";
  $stmt = $koneksi->query($sql);

  return $stmt->fetch_all(MYSQLI_NUM);
}




function cekKoneksi()
{
  global $koneksi;

  if ($koneksi->connect_error) {
    die('error: ' . $koneksi->connect_error);
  } else {
    echo "berhasil";
  }
}
