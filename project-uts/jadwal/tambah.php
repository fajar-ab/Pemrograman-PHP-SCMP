<?php
require_once '../template/template.php';
require_once '../function.php';
?>

<?php head('Tambah') ?>

<div class="container pt-5">
    <div class="card mt-4">
        <div class="card-header">
            <i class="fa-solid fa-list"></i>
            <span class="ms-2">Tambah Jadwal Baru</span>
        </div>
        <div class="card-body px-4">
            <?php 
                if (isset($_POST['submit'])) {
                    if (tambahJadwal($_POST) > 0) {
                        header('Location: ../index.php');
                    } else {
                        echo <<<MS
                        <div class="alert alert-danger" role="alert">
                            Data Gagal Disimpan
                        </div>
                        MS;
                    }
                }
            ?>
            <form action="" method="post">            
                <div class="mb-3">
                    <label for="hari" class="form-label">
                        <i class="fa-solid fa-calendar-day"></i>
                        <span class="ms-2">Hari</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="hari" name="hari">
                        <option value="senin">senin</option>
                        <option value="selasa">selasa</option>
                        <option value="rabu">rabu</option>
                        <option value="kamis">kamis</option>
                        <option value="jumat">jumat</option>
                        <option value="sabtu">sabtu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="matakuliah" class="form-label">
                        <i class="fa-solid fa-book"></i>
                        <span class="ms-2">Mata Kuliah</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="matakuliah" name="matakuliah">
                        <?php mataKuliah() ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pukul" class="form-label">
                        <i class="fa-solid fa-clock"></i>
                        <span class="ms-2">Pukul</span>
                    </label>
                    <input type="text" class="form-control" name="pukul" id="pukul" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span class="ms-2">Tambah Jadwal</span> 
                </button>
            </form>
        </div>
    </div>

</div>
<?php footer() ?>