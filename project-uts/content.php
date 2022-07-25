<?php

@$halaman = $_GET['halaman'];

switch ($halaman) {

    // jadwal
  case 'jadwal':
    require_once __DIR__ . "/view/jadwal/tampil.php";
    break;
  case 'tambah-jadwal':
    require_once __DIR__ . "/view/jadwal/tambah.php";
    break;
  case 'ubah-jadwal':
    require_once __DIR__ . "/view/jadwal/ubah.php";
    break;

    // mata kuliah
  case 'matakuliah':
    require_once __DIR__ . "/view/matakuliah/tampil.php";
    break;
  case 'tambah-matakuliah':
    require_once __DIR__ . "/view/matakuliah/tambah.php";
    break;

    // default
  default:
    require_once __DIR__ . "/view/jadwal/tampil.php";
}
