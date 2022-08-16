<?php
require_once __DIR__ . "/../../config/koneksi.php";
require_once __DIR__ . "/../helper/pesan.php";

// dapatkan koneksi database mysql
$koneksi = Database::getConnection();

//  ambil data jadwal dari database
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

  if ($stmt->affected_rows > 0) {
    buatPesan("simpan", true);
    header('location: index.php?halaman=jadwal');
    exit;
  } else {
    buatPesan("simpan", false);
    header('location: index.php?halaman=tambah-jadwal');
    exit;
  }
}

// ubah data jadwal
function jadwalUbah($data)
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

  if ($stmt->affected_rows > 0) {
    buatPesan("ubah", true);
    header('location: index.php?halaman=jadwal');
    exit;
  } else {
    buatPesan("ubah", false);
    header('location: index.php?halaman=ubah-jadwal&id=' . $id);
    exit;
  }
}

// hapus data jadwal
function jadwalHapus($id)
{
  global $koneksi;

  $sql = "DELETE FROM tb_jadwal WHERE id_jadwal = ?";
  $stmt = $koneksi->prepare($sql);
  $stmt->execute([$id]);

  if ($stmt->affected_rows > 0) {
    buatPesan("hapus", true);
  } else {
    buatPesan("hapus", false);
  }

  header('location: index.php?halaman=jadwal');
  exit;
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

// cari data jadwal berdasarkan keyword
function jadwalCariDenganKeyword($keyword)
{
  $sql = "SELECT tb_jadwal.hari,
        tb_mata_kuliah.nama,
        tb_jadwal.pukul,
        tb_mata_kuliah.ruangan,
        tb_mata_kuliah.dosen
    FROM tb_jadwal
        INNER JOIN tb_mata_kuliah ON tb_jadwal.id_mata_kuliah = tb_mata_kuliah.id_mata_kuliah
    WHERE tb_jadwal.hari LIKE ?
        OR tb_mata_kuliah.nama LIKE ?
        OR tb_jadwal.pukul LIKE ?
        OR tb_mata_kuliah.ruangan LIKE ?
        OR tb_mata_kuliah.dosen LIKE ?
    ORDER BY tb_jadwal.hari,
        tb_jadwal.pukul";

  $keyword = [
    "%{$keyword}%", "%{$keyword}%", "%{$keyword}%",
    "%{$keyword}%", "%{$keyword}%"
  ];

  return jadwalCari($sql, $keyword);
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
