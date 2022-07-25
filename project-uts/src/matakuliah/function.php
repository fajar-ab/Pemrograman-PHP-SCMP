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


function matakuliahCari(string $sql, array $keyword): array
{
  global $koneksi;
  $stmt = $koneksi->prepare($sql);
  $stmt->execute($keyword);
  $hasil = $stmt->get_result();
  $stmt->close();

  return $hasil->fetch_all(MYSQLI_NUM);
}

function matakuliahSimpan($data)
{
  global $koneksi;

  $sql = "INSERT INTO tb_matakuliah VALUES (NULL, ?, ?, ?)";
  $stmt = $koneksi->prepare($sql);
  $stmt->bind_param('sss',);

  $hari         = $data['hari'];

  $stmt->execute();

  return $stmt->affected_rows;
}


// function cekKoneksi()
// {
//   global $koneksi;

//   if ($koneksi->connect_error) {
//     die('error: ' . $koneksi->connect_error);
//   } else {
//     echo "berhasil";
//   }
// }
