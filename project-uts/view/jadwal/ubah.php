<?php
require_once __DIR__ . '/../../src/matakuliah/function.php';
require_once __DIR__ . '/../../src/jadwal/function.php';

// ambil data nama matakuliah
$sql = "SELECT id_mata_kuliah, nama FROM `tb_mata_kuliah` WHERE ?";
$dataMatakuliah = matakuliahCari($sql, [1]);

// ambil data jadwal
$id = $_GET['id'];
$sql = "SELECT * FROM tb_jadwal WHERE id_jadwal = ?";
$dataJadwal = jadwalCari($sql, [$id])[0];
$pukul = explode(" - ", $dataJadwal[3]);

// edit
if (isset($_POST['edit'])) {
  $hasil = jadwalEdit($_POST);
}

?>

<div class="card">
  <div class="card-header text-muted user-select-none">
    <i class="fa-solid fa-pen-to-square me-2"></i>
    Edit Jadwal
  </div>
  <div class="card-body px-md-5">
    <form action="" method="POST">

      <input type="number" name="id" value="<?= $dataJadwal[0] ?>" hidden>

      <div class="mb-3">
        <div class="row">
          <div class="col-md-2">
            <label class="form-label" for="hari">
              <i class="fa-solid fa-calendar-day me-2"></i>Hari
            </label>
          </div>
          <div class="col-md-6">
            <select class="form-select py-1" name="hari" id="hari" data-hari="<?= $dataJadwal[1] ?>" required>
              <option value="" disabled>— Pilih Hari</option>
              <option value="senin">senin</option>
              <option value="selasa">selasa</option>
              <option value="rabu">rabu</option>
              <option value="kamis">kamis</option>
              <option value="jumat">jumat</option>
              <option value="sabtu">sabtu</option>
            </select>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <div class="row">
          <div class="col-md-2">
            <label class="form-label" for="matakuliah">
              <i class="fa-solid fa-book-open me-2"></i>Matakuliah
            </label>
          </div>
          <div class="col-md-6">
            <select class="form-select py-1" name="matakuliah" id="matakuliah" required>
              <option value="" disabled>— Pilih Matakuliah</option>

              <?php foreach ($dataMatakuliah as $matakuliah) : ?>
                <?php if ($matakuliah[0] == $dataJadwal[2]) : ?>
                  <option value="<?= $matakuliah[0] ?>" selected><?= $matakuliah[1] ?></option>
                <?php else : ?>
                  <option value="<?= $matakuliah[0] ?>"><?= $matakuliah[1] ?></option>
                <?php endif; ?>
              <?php endforeach; ?>

            </select>
          </div>
        </div>
      </div>

      <div class="mb-4">
        <div class="row">
          <div class="col-md-2">
            <label for="pukul" class="form-label">
              <i class="fa-solid fa-clock me-2"></i>Pukul
            </label>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <input class="form-control" type="time" name="pukul_sebelum" id="pukul" required value="<?= $pukul[0] ?>">
              <span class="input-group-text border-0" id="basic-addon1"> - </span>
              <input class="form-control" type="time" name="pukul_sesudah" required value="<?= $pukul[1] ?>">
            </div>
          </div>
        </div>
      </div>

      <button class="btn btn-primary px-3" type="submit" name="edit">
        <!-- <i class="fa-solid fa-plus me-2"></i> -->
        edit
      </button>
      <a href="?halaman=jadwal" class="btn btn-success px-3 ms-2" type="submit">kembali</a>
    </form>
  </div>
</div>

<br><br><br><br><br><br>