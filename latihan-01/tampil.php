<?php
include_once "koneksi.php";

function queryTampil($sql)
{
    global $connection;

    $hasil = mysqli_query($connection, $sql);

    $rows = [];
    while ($data = mysqli_fetch_row($hasil)) {
        $rows[] = $data;
    }

    return $rows;
}
