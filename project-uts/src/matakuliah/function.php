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

  $sql = "INSERT INTO tb_mata_kuliah VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = $koneksi->prepare($sql);
  $stmt->bind_param('ssssii', $idMatakuliah, $nama, $dosen, $ruangan, $sks, $semester);

  $idMatakuliah = htmlspecialchars($data['id_matakuliah']);
  $nama         = htmlspecialchars($data['nama_matakuliah']);
  $dosen        = htmlspecialchars($data['dosen']);
  $ruangan      = $data['ruangan'];
  $sks          = $data['sks'];
  $semester     = $data['semester'];
  $stmt->execute();

  if ($stmt->affected_rows > 0) {

    header('location: index.php?halaman=matakuliah');
  } else {

    header('location: index.php?halaman=tambah-matakuliah');
  }
}

function matakuliahUbah($data)
{
  global $koneksi;

  $sql = "UPDATE `tb_mata_kuliah` SET 
    `nama` = ?, 
    `dosen` = ?, 
    `ruangan` = ?, 
    `sks` = ?, 
    `semester` = ? 
  WHERE `tb_mata_kuliah`.`id_mata_kuliah` = ?";
  var_dump($data);

  $stmt = $koneksi->prepare($sql);
  $stmt->bind_param('sssiis', $nama, $dosen, $ruangan, $sks, $semester, $idMatakuliah);

  $idMatakuliah = htmlspecialchars($data['id_matakuliah']);
  $nama         = htmlspecialchars($data['nama_matakuliah']);
  $dosen        = htmlspecialchars($data['dosen']);
  $ruangan      = $data['ruangan'];
  $sks          = $data['sks'];
  $semester     = $data['semester'];
  $stmt->execute();

  if ($stmt->affected_rows > 0) {

    header('location: index.php?halaman=matakuliah');
  } else {

    header('location: index.php?halaman=ubah-matakuliah&id=' . $idMatakuliah);
  }
}

function matakuliahHapus($id)
{
  global $koneksi;

  $sql = "DELETE FROM tb_mata_kuliah WHERE id_mata_kuliah = ?";
  $stmt = $koneksi->prepare($sql);
  $stmt->execute([$id]);

  if ($stmt->affected_rows) {
    // $_SESSION['modifikasi'] = ['aksi' => 'hapus', 'keberhasilan' => true];
  } else {
    // $_SESSION['modifikasi'] = ['aksi' => 'hapus', 'keberhasilan' => false];
  }

  header('location: index.php?halaman=matakuliah');
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
