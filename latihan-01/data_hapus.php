<?php 

include_once "koneksi.php";
include_once "popup.php";

$keyword = $_POST['keyword'];

// hapus data penduduk berdasarkan keyword yang di cari
$sql = "DELETE FROM penduduk WHERE nik = '$keyword'";
mysqli_query($koneksi, $sql);


// tampilkan pesan
if (mysqli_affected_rows($koneksi) > 0) {
    popup("data berhasil di hapus", "index.php");
} else {
    popup("tidak ada data yang dihapus", "form_cari.php?cek=hapus");
}
