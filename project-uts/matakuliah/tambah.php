<?php
require_once '../template/template.php';
require_once '../function.php';
?>

<?php head('Tambah') ?>

<div class="container pt-5">
    <div class="card mt-4">
        <div class="card-header">
            <i class="fa-solid fa-list"></i>
            <span class="ms-2">Tambah Matakuliah Baru</span>
        </div>
        <div class="card-body px-4">
            <?php
            if (isset($_POST['submit'])) {
                if (tambahMatakuliah($_POST) > 0) {
                    header('Location: tampil.php');
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
                    <label for="code" class="form-label">
                        <i class="fa-solid fa-code"></i>
                        <span class="ms-2">Code Matakuliah</span>
                    </label>
                    <input type="text" class="form-control" name="code" id="code" required>
                </div>
                <div class="mb-3">
                    <label for="matakuliah" class="form-label">
                        <i class="fa-solid fa-book"></i>
                        <span class="ms-2">Nama Matakuliah</span>
                    </label>
                    <input type="text" class="form-control" name="matakuliah" id="matakuliah" required>
                </div>
                <div class="mb-3">
                    <label for="dosen" class="form-label">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span class="ms-2">Dosen</span>
                    </label>
                    <input type="text" class="form-control" name="dosen" id="dosen" required>
                </div>
                <div class="mb-3">
                    <label for="ruangan" class="form-label">
                        <i class="fa-solid fa-door-closed"></i>
                        <span class="ms-2">Ruangan</span>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="ruangan" name="ruangan">
                        <option value="RUANG01">RUANG01</option>
                        <option value="RUANG02">RUANG02</option>
                        <option value="LABOR01">LABOR01</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="sks" class="form-label">
                                <i class="fa-solid fa-hashtag"></i>
                                <span class="ms-2">SKS</span>
                            </label>
                            <input type="text" class="form-control" name="sks" id="sks" required>
                        </div>

                    </div>
                    <div class="col">
                        
                        <div class="mb-3">
                            <label for="semester" class="form-label">
                                <i class="fa-solid fa-hashtag"></i>
                                <span class="ms-2">Semester</span>
                            </label>
                            <input type="text" class="form-control" name="semester" id="semester" required>
                        </div>
                    </div>
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