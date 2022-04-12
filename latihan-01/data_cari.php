<?php  

include_once "tampil.php";

$_POST['keyword'];

$sql = "SELECT * FROM penduduk WHERE nama LIKE '%{$keyword}%'";
