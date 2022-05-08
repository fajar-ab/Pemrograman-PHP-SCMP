<?php  

include_once "data_tampil.php";

$keyword = $_POST['keyword'];

$sql = "SELECT nik, nama, 
        CASE jenis_kelamin 
            WHEN 'L' THEN 'Laki-laki' 
            WHEN 'P' THEN 'Perempuan' 
        END AS jenis_kelamin, alamat, pendidikan 
        FROM penduduk
        WHERE nik LIKE '%{$keyword}'";

$rows = tampil($sql);
