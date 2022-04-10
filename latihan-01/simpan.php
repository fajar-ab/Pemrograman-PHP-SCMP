<?php 

include_once "koneksi.php";

$nim = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

mysqli_query($connection, "INSERT INTO penduduk (nik, nama, jenis_kelamin, alamat) VALUES ('$nim', '$nama', '$jk', '$alamat')");

if (mysqli_affected_rows($connection) > 0) {
    echo "
        <script>
            alert('data berhasil di tambahkan')
            document.location.href = 'index.php'
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal di tambahkan')
        </script>
    ";
}

?>