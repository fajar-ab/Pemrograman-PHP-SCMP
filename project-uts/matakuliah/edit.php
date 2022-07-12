<?php
require_once '../template/template.php';
require_once '../function.php';

$id = $_GET['id'];
$data = query("SELECT * FROM `tb_mata_kuliah` WHERE tb_mata_kuliah.id_mata_kuliah = '{$id}'")[0];

?>

<?php head('Edit') ?>

<div class="container pt-5">
    <div class="card mt-4">
        <div class="card-header">
            <i class="fa-solid fa-list"></i>
            <span class="ms-2">Edit Mata Kuliah</span>
        </div>
        <div class="card-body px-4 py-4">
            <?php
            if (isset($_POST['submit'])) {
                if (editMatakuliah($_POST) > 0) {
                    header('Location: tampil.php');
                } else {
                    echo <<<MS
                        <div class="alert alert-danger" role="alert">
                            Data Gagal Diedit
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
                    <input type="text" class="form-control" name="code" id="code" required readonly value="<?= $data[0] ?>">
                </div>
                <div class="mb-3">
                    <label for="matakuliah" class="form-label">
                        <i class="fa-solid fa-book"></i>
                        <span class="ms-2">Nama Matakuliah</span>
                    </label>
                    <input type="text" class="form-control" name="matakuliah" id="matakuliah" required value="<?= $data[1] ?>">
                </div>
                <div class="mb-3">
                    <label for="dosen" class="form-label">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span class="ms-2">Dosen</span>
                    </label>
                    <input type="text" class="form-control" name="dosen" id="dosen" required value="<?= $data[2] ?>">
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
                            <input type="text" class="form-control" name="sks" id="sks" required value="<?= $data[4] ?>">
                        </div>

                    </div>
                    <div class="col">

                        <div class="mb-3">
                            <label for="semester" class="form-label">
                                <i class="fa-solid fa-hashtag"></i>
                                <span class="ms-2">Semester</span>
                            </label>
                            <input type="text" class="form-control" name="semester" id="semester" required value="<?= $data[5] ?>">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span class="ms-2">Edit Matakuliah</span>
                </button>
            </form>
        </div>
    </div>

</div>
<?php footer() ?>