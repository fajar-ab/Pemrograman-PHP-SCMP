<?php
include_once __DIR__ . '/alert.php';
session_start();

function buatPesan(string $title, bool $keberhasilan): void
{
  $_SESSION["modifikasi"] = [
    "title" => $title,
    "keberhasilan" => $keberhasilan
  ];
}

function tampilPesan(array $value): void
{
  $title = $value['title'];
  $keberhasilan = $value['keberhasilan'];

  switch ($title) {
    case 'simpan':
      if ($keberhasilan) {
        alert('Data berhasil disimpan', ALERT_SUCCESS);
      } else {
        alert('Data gagal disimpan', ALERT_DANGER);
      }
      break;
    case 'ubah':
      if ($keberhasilan) {
        alert('Data berhasil diubah', ALERT_SUCCESS);
      } else {
        alert('Data gagal diubah', ALERT_DANGER);
      }
      break;
    case 'hapus':
      if ($keberhasilan) {
        alert('Data berhasil dihapus', ALERT_SUCCESS);
      } else {
        alert('Data gagal dihapus', ALERT_DANGER);
      }
      break;
  }

  // session_destroy();
  unset($_SESSION["modifikasi"]);
}
