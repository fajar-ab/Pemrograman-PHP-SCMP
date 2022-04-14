<?php  

include_once "data_tampil.php";

$keyword = $_POST['keyword'];

$sql = "SELECT * FROM penduduk WHERE nik LIKE '%{$keyword}'";

$rows = tampil($sql);
