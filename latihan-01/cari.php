<?php  

include_once "tampil.php";

function queryCari($keyword) {

    $sql = "SELECT * FROM penduduk WHERE nama LIKE '%{$keyword}%'";

    return queryTampil($sql);
}
