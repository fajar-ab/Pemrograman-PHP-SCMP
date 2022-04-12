<?php 

include_once "koneksi.php";

$nim = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

// simpan data kedalam database
$sql = "INSERT INTO 
        penduduk (nik, nama, jenis_kelamin, alamat) 
        VALUES 
        ('$nim', '$nama', '$jk', '$alamat')
    ";

mysqli_query($koneksi, $sql);

// tampilkan pesan kesalahan
if (mysqli_affected_rows($koneksi) > 0) {
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