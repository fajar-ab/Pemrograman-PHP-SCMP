<?php

require_once __DIR__ . '/../../config/koneksi.php';

// dapatkan koneksi database mysql
$koneksi = Database::getConnection();


function dataJadwal(): array
{
  global $koneksi;

  $sql = "SELECT 
    tb_jadwal.hari,
    tb_mata_kuliah.nama,
    tb_jadwal.pukul,
    tb_mata_kuliah.ruangan,
    tb_mata_kuliah.dosen,
    tb_jadwal.id_jadwal
  FROM tb_jadwal
  INNER JOIN tb_mata_kuliah ON tb_jadwal.id_mata_kuliah = tb_mata_kuliah.id_mata_kuliah
  ORDER BY tb_jadwal.hari, tb_jadwal.pukul";

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
