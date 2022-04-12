<?php
include_once "koneksi.php";

// fungsi tampil mengambil dari database penduduk
function tampil($sql)
{
    global $koneksi;

    $hasil = mysqli_query($koneksi, $sql);

    $rows = [];
    while ($data = mysqli_fetch_row($hasil)) {
        // simpan dalam array
        $rows[] = $data;
    }

    return $rows;
}
