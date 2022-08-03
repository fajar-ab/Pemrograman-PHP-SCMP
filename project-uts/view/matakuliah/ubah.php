<?php
require_once __DIR__ . '/../../src/matakuliah/function.php';

// ambil data matakuliah
$id = $_GET['id'];
$sql = 'SELECT * FROM tb_mata_kuliah WHERE id_mata_kuliah = ?';
$dataMatakuliah = matakuliahCari($sql, [$id])[0];

// ubah data matakuliah
if (isset($_POST['ubah'])) {
  matakuliahUbah($_POST);
}

?>

<div class="card">
  <div class="card-header text-muted user-select-none">
    <i class="fa-solid fa-list-check me-2"></i>
    Ubah Matakuliah
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
          <input class="form-control" type="text" id="inputKode" name="id_matakuliah" value="<?= $dataMatakuliah[0] ?>" readonly required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-2">
          <label class="form-label text-nowrap" for="inputNamaMatakuliah">
            <i class="fa-solid fa-book-open me-2"></i>Nama Matakuliah
          </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" id="inputNamaMatakuliah" name="nama_matakuliah" value="<?= $dataMatakuliah[1] ?>" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-2">
          <label class="form-label" for="inputDosen">
            <i class="fa-solid fa-chalkboard-user me-2"></i>Dosen
          </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" id="inputDosen" name="dosen" value="<?= $dataMatakuliah[2] ?>" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-2">
          <label class="form-label" for="inputRuangan">
            <i class="fa-solid fa-door-closed me-2"></i>Ruangan
          </label>
        </div>
        <div class="col-md-6">
          <select class="form-select py-1" id="inputRuangan" name="ruangan" data-ruangan="<?= $dataMatakuliah[3] ?>" required>
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
          <input class="form-control" type="number" id="inputSks" name="sks" value="<?= $dataMatakuliah[4] ?>" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-2">
          <label class="form-label" for="inputSemester">
            <i class="fa-solid fa-hashtag me-2"></i>Semester
          </label>
        </div>
        <div class="col-md-2">
          <input class="form-control" type="number" id="inputSemester" name="semester" value="<?= $dataMatakuliah[5] ?>" required>
        </div>
      </div>

      <button class="btn btn-primary px-3" type="submit" name="ubah">
        <!-- <i class="fa-solid fa-plus me-2"></i> -->
        ubah
      </button>
      <a href="?halaman=matakuliah" class="btn btn-success px-3 ms-2" type="submit">kembali</a>
    </form>
  </div>
</div>

<script src="assets\my\js\matakuliah-select.js"></script>