<?php 

include_once "koneksi.php";

$keyword = $_POST['keyword'];

// hapus data penduduk berdasarkan keyword yang di cari
$sql = "DELETE FROM penduduk WHERE nik = '$keyword'";
mysqli_query($koneksi, $sql);


// tampilkan pesan
if (mysqli_affected_rows($koneksi) > 0) {
    echo <<<ALERT
        <script>
            alert('data berhasil di hapus')
            document.location.href = 'index.php'
        </script>
    ALERT;
} else {

    echo <<<ALERT
        <script>
            alert('data gagal di hapus')
            document.location.href = 'form_cari.php?cek=Hapus'
        </script>
    ALERT;

}
