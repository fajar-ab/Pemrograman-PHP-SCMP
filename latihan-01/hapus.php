<?php 

include_once "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM penduduk WHERE id='$id'";
mysqli_query($connection, $sql);



if (mysqli_affected_rows($connection) > 0) {
    echo "
        <script>
            alert('data berhasil di hapus')
            document.location.href = 'index.php'
        </script>
    ";
} else {

    echo "
        <script>
            alert('data gagal di hapus')
        </script>
    ";

}
