<?php 

include_once "koneksi.php";

$nim = htmlspecialchars($_POST['nik']);
$nama = htmlspecialchars($_POST['nama']);
$jk = $_POST['jk'];
$alamat = htmlspecialchars($_POST['alamat']);
$pendidikan = $_POST['pendidikan'];

// simpan data kedalam database
$sql = "INSERT INTO 
        penduduk (nik, nama, jenis_kelamin, alamat, pendidikan) 
        VALUES 
        ('$nim', '$nama', '$jk', '$alamat', '$pendidikan')
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