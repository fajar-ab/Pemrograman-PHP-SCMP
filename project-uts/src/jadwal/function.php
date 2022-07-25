<?php

require_once __DIR__ . '/../../config/koneksi.php';
session_start();

// dapatkan koneksi database mysql
$koneksi = Database::getConnection();

// ambil data jadwal dari database
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

// cari data jadwal
function jadwalCari(string $sql, array $keyword): array
{
  global $koneksi;
  $stmt = $koneksi->prepare($sql);
  $stmt->execute($keyword);
  $hasil = $stmt->get_result();
  $stmt->close();

  return $hasil->fetch_all(MYSQLI_NUM);
}

// simpan data jadwal
function jadwalSimpan($data)
{
  global $koneksi;

  $sql = "INSERT INTO tb_jadwal VALUES (NULL, ?, ?, ?)";
  $stmt = $koneksi->prepare($sql);
  $stmt->bind_param('sss', $hari, $idMatakuliah, $pukul);

  $hari         = $data['hari'];
  $idMatakuliah = $data['matakuliah'];
  $pukul        = "{$data['pukul_sebelum']} - {$data['pukul_sesudah']}";
  $stmt->execute();

  if ($stmt->affected_rows) {
    $_SESSION['modifikasi'] = ['aksi' => 'simpan', 'keberhasilan' => true];
  } else {
    $_SESSION['modifikasi'] = ['aksi' => 'simpan', 'keberhasilan' => false];
  }

  header('location: index.php?halaman=jadwal');
}

// edit data jadwal
function jadwalEdit($data)
{
  global $koneksi;

  $sql = "UPDATE tb_jadwal 
    SET hari = ?, id_mata_kuliah = ?, pukul = ?
    WHERE id_jadwal = ?";

  $stmt = $koneksi->prepare($sql);
  $stmt->bind_param('sssi', $hari, $idMatakuliah, $pukul, $id);

  $id           = $data['id'];
  $hari         = $data['hari'];
  $idMatakuliah = $data['matakuliah'];
  $pukul        = "{$data['pukul_sebelum']} - {$data['pukul_sesudah']}";
  $stmt->execute();

  if ($stmt->affected_rows) {
    $_SESSION['modifikasi'] = ['aksi' => 'ubah', 'keberhasilan' => true];
  } else {
    $_SESSION['modifikasi'] = ['aksi' => 'ubah', 'keberhasilan' => false];
  }

  header('location: index.php?halaman=jadwal');
}

// hapus data jadwal
function jadwalHapus($id)
{
  global $koneksi;

  $sql = "DELETE FROM tb_jadwal WHERE id_jadwal = ?";
  $stmt = $koneksi->prepare($sql);
  $stmt->execute([$id]);

  if ($stmt->affected_rows) {
    $_SESSION['modifikasi'] = ['aksi' => 'hapus', 'keberhasilan' => true];
  } else {
    $_SESSION['modifikasi'] = ['aksi' => 'hapus', 'keberhasilan' => false];
  }

  header('location: index.php?halaman=jadwal');
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
