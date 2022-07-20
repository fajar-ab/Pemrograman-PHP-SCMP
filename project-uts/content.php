<?php

@$halaman = $_GET['halaman'];

switch ($halaman) {
  case 'matakuliah':
    require_once __DIR__ . "/view/matakuliah/tampil.php";
    break;
  default:
    require_once __DIR__ . "/view/jadwal/tampil.php";
}
