<?php
require_once __DIR__ . '/../../src/matakuliah/function.php';

if (isset($_POST['tambah'])) {
  matakuliahSimpan($_POST);
}

// pesan keberhasilan modifikasi data
if (isset($_SESSION["modifikasi"])) {
  tampilPesan($_SESSION["modifikasi"]);
}

?>

<div class="card">
  <div class="card-header text-muted user-select-none">
    <i class="fa-solid fa-list-check me-2"></i>
    Matakuliah Baru
  </div>

  <div class="card-body px-md-5">
    <form class="" action="" method="post">

      <div class="row mb-3">
        <div class="col-md-2">
          <label class="form-label" for="inputKode">
            <i class="fa-solid fa-code me-2"></i>Kode
          </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" id="inputKode" name="id_matakuliah" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-2">
          <label class="form-label text-nowrap" for="inputNamaMatakuliah">
            <i class="fa-solid fa-book-open me-2"></i>Nama Matakuliah
          </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" id="inputNamaMatakuliah" name="nama_matakuliah" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-2">
          <label class="form-label" for="inputDosen">
            <i class="fa-solid fa-chalkboard-user me-2"></i>Dosen
          </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" id="inputDosen" name="dosen" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-2">
          <label class="form-label" for="inputRuangan">
            <i class="fa-solid fa-door-closed me-2"></i>Ruangan
          </label>
        </div>
        <div class="col-md-6">
          <select class="form-select py-1" id="inputRuangan" name="ruangan">
            <option value="" disabled selected>— Pilih Ruangan</option>
            <option value="RUANG01">RUANG01</option>
            <option value="RUANG02">RUANG02</option>
            <option value="LABOR01">LABOR01</option>
          </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-2">
          <label class="form-label" for="inputSks">
            <i class="fa-solid fa-hashtag me-2"></i>SKS
          </label>
        </div>
        <div class="col-md-2">
          <input class="form-control" type="number" id="inputSks" name="sks" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-2">
          <label class="form-label" for="inputSemester">
            <i class="fa-solid fa-hashtag me-2"></i>Semester
          </label>
        </div>
        <div class="col-md-2">
          <input class="form-control" type="number" id="inputSemester" name="semester" required>
        </div>
      </div>

      <button class="btn btn-primary px-3" type="submit" name="tambah">
        <!-- <i class="fa-solid fa-plus me-2"></i> -->
        tambah
      </button>
      <a href="?halaman=matakuliah" class="btn btn-success px-3 ms-2" type="submit">kembali</a>
    </form>
  </div>
</div>