<?php 

require_once "koneksi.php";

$nik_lama = $_POST['nik_lama'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$pendidikan = $_POST['pendidikan'];

// update data database berdasarkan
$sql = "UPDATE penduduk
        SET
        nik = '$nik',
        nama = '$nama',
        jenis_kelamin = '$jk',
        alamat = '$alamat',
        pendidikan = '$pendidikan'
        WHERE nik = '$nik_lama'
    ";

mysqli_query($koneksi, $sql);

// tampilkan pesan
if (mysqli_affected_rows($koneksi) > 0) {
    echo "
        <script>
            alert('data berhasil di update')
            document.location.href = 'index.php'
        </script>
    ";
} else {

    echo "
        <script>
            alert('data gagal di diupdate')
        </script>
    ";

}


?>