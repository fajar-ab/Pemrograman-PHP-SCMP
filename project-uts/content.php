<?php

@$halaman = $_GET['halaman'];

$url = match ($halaman) {

  // jadwal
  'jadwal'        => __DIR__ . "/view/jadwal/tampil.php",
  'tambah-jadwal' => __DIR__ . "/view/jadwal/tambah.php",
  'ubah-jadwal'   => __DIR__ . "/view/jadwal/ubah.php",

  // mata kuliah
  'matakuliah'        => __DIR__ . "/view/matakuliah/tampil.php",
  'tambah-matakuliah' => __DIR__ . "/view/matakuliah/tambah.php",
  'ubah-matakuliah'   => __DIR__ . "/view/matakuliah/ubah.php",

    // default
  default => __DIR__ . "/view/jadwal/tampil.php"
};

require_once $url;
