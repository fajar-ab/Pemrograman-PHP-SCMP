<?php

function tampilPesan($data)
{
  require_once __DIR__ . '/alert.php';

  switch ($data['aksi']) {
    case 'simpan':
      if ($data['keberhasilan']) {
        alert('data berhasil disimpan!', ALERT_SUCCESS);
      } else {
        alert('data gagal disimpan!', ALERT_DANGER);
      }
      break;
    case 'hapus':
      if ($data['keberhasilan']) {
        alert('data berhasil dihapus!', ALERT_SUCCESS);
      } else {
        alert('data gagal disimpan!', ALERT_DANGER);
      }
      break;
    case 'ubah':
      if ($data['keberhasilan']) {
        alert('data berhasil diubah!', ALERT_SUCCESS);
      } else {
        alert('data gagal diubah!', ALERT_DANGER);
      }
      break;
  }

  session_destroy();
}
