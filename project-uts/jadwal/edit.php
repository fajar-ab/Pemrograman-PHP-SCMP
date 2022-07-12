<?php
require_once '../template/template.php';
require_once '../function.php';

$id = $_GET['id'];
$data = query("SELECT * FROM `tb_jadwal` WHERE tb_jadwal.id_jadwal = {$id}")[0];

?>

<?php head('Edit') ?>

<div class="container pt-5">
    <div class="card mt-4">
        <div class="card-header">
            <i class="fa-solid fa-list"></i>
            <span class="ms-2">Edit Jadwal</span>
        </div>
        <div class="card-body px-4">
            <?php 
                if (isset($_POST['submit'])) {
                    if (editJadwal($_POST) > 0) {
                        header('Location: ../index.php');
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
                <input name="id" value="<?= $data[0] ?>" type="hidden">   
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
                        <?php mataKuliah($data[2]) ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pukul" class="form-label">
                        <i class="fa-solid fa-clock"></i>
                        <span class="ms-2">Pukul</span>
                    </label>
                    <input type="text" class="form-control" name="pukul" id="pukul" required value="<?= $data[3] ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span class="ms-2">Edit Jadwal</span> 
                </button>
            </form>
        </div>
    </div>

</div>
<?php footer() ?>