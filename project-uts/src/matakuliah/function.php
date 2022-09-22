<?php
require_once __DIR__ . '/../../config/koneksi.php';
require_once __DIR__ . "/../helper/pesan.php";

// dapatkan koneksi database mysql
$koneksi = Database::getConnection();


function dataMatakuliah(): array
{
  global $koneksi;

  $sql = "SELECT * FROM tb_mata_kuliah";
  $stmt = $koneksi->query($sql);

  return $stmt->fetch_all(MYSQLI_NUM);
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
    buatPesan("simpan", true);
    header('location: index.php?halaman=matakuliah');
    exit;
  } else {
    buatPesan("simpan", false);
    header('location: index.php?halaman=tambah-matakuliah');
    exit;
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
    buatPesan("ubah", true);
    header('location: index.php?halaman=matakuliah');
    exit;
  } else {
    buatPesan("ubah", false);
    header('location: index.php?halaman=ubah-matakuliah&id=' . $idMatakuliah);
    exit;
  }
}


function matakuliahHapus($id)
{
  global $koneksi;

  $sql = "DELETE FROM tb_mata_kuliah WHERE id_mata_kuliah = ?";
  $stmt = $koneksi->prepare($sql);
  $stmt->execute([$id]);

  if ($stmt->affected_rows > 0) {
    buatPesan("hapus", true);
  } else {
    buatPesan("hapus", false);
  }

  header('location: index.php?halaman=matakuliah');
  exit;
}


function matakuliahCari(string $sql, $keyword): array
{
  global $koneksi;
  $stmt = $koneksi->prepare($sql);
  $stmt->execute($keyword);
  $hasil = $stmt->get_result();
  $stmt->close();

  return $hasil->fetch_all(MYSQLI_NUM);
}


function matakuliahCariDenganKerword($keyword)
{
  $sql = "SELECT * FROM tb_mata_kuliah WHERE 
  id_mata_kuliah LIKE ? OR nama LIKE ? OR dosen LIKE ? 
  OR ruangan LIKE ? OR sks LIKE ? OR semester LIKE ?";

  $keyword = [
    "%{$keyword}%", "%{$keyword}%", "%{$keyword}%",
    "%{$keyword}%", "%{$keyword}%", "%{$keyword}%"
  ];
  return matakuliahCari($sql, $keyword);
}
