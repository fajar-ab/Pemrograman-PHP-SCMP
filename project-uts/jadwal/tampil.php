<?php
require_once 'template/template.php';
require_once "function.php";

$data = query(
    "SELECT tb_jadwal.hari,
        tb_mata_kuliah.nama,
        tb_jadwal.pukul,
        tb_mata_kuliah.ruangan,
        tb_mata_kuliah.dosen,
        tb_jadwal.id_jadwal
    FROM tb_jadwal
    INNER JOIN tb_mata_kuliah ON tb_jadwal.id_mata_kuliah = tb_mata_kuliah.id_mata_kuliah
    ORDER BY tb_jadwal.hari, tb_jadwal.pukul"
);

if (isset($_POST['cari'])) {
    $data = dataCari($_POST['keyword']);
}

?>


<?php head('Jadwal') ?>

<div class="container pt-5">

    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
                Jadwal Matakuliah
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="matakuliah/tampil.php">
                List Matakuliah
            </a>
        </li>
    </ul>

    <div class="card mt-4">
        <div class="card-header">
            <div class="row">
                <div class="col-sm">
                    <i class="fa-solid fa-table"></i>
                    <span class="ms-2">Jadwal Mata Kuliah</span>
                </div>
                <div class="col-sm">
                    <div class="row">
                        <div class="col">

                            <form action="" method="post">
                                <div class="input-group input-group-sm">
                                    <input name="keyword" type="text" class="form-control" placeholder="masukkan keyword pencarian" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-secondary px-3" type="submit" id="button-addon2" name="cari">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-3">
                            <a class="btn btn-primary btn-sm" href="jadwal/tambah.php" role="button">
                                <i class="fa-solid fa-circle-plus"></i>
                                <span>Tambah</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">

                        </th>
                        <th scope="col">
                            <i class="fa-solid fa-calendar-day"></i>
                            <span class="ms-2">Hari</span>
                        </th>
                        <th scope="col">
                            <i class="fa-solid fa-book"></i>
                            <span class="ms-2">Mata Kuliah</span>
                        </th>
                        <th scope="col">
                            <i class="fa-solid fa-clock"></i>
                            <span class="ms-2">Pukul</span>
                        </th>
                        <th scope="col">
                            <i class="fa-solid fa-door-closed"></i>
                            <span class="ms-2">Ruangan</span>
                        </th>
                        <th scope="col">
                            <i class="fa-solid fa-chalkboard-user"></i>
                            <span class="ms-2">Dosen</span>
                        </th>
                    </tr>
                </thead>
                <?php if ( count($data) !== 0 ) : ?>
                <tbody>
                    <?php foreach ($data as $td) : ?>
                        <tr>
                            <td class="text-center">
                                <div class="btn-group dropend">
                                    <button type="button" class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    </button>
                                    <ul class="dropdown-menu" style="font-size: .9em">
                                        <li>
                                            <a class="dropdown-item" href="jadwal/edit.php?id=<?= $td[5] ?>">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <span class="ms-2">Ubah</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="jadwal/hapus.php?id=<?= $td[5] ?>">
                                                <i class="fa-solid fa-trash"></i>
                                                <span class="ms-2">Hapus</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td><?= $td[0] ?></td>
                            <td><?= $td[1] ?></td>
                            <td><?= $td[2] ?></td>
                            <td><?= $td[3] ?></td>
                            <td><?= $td[4] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <?php else : ?>
                <tfoot>
                    <tr>
                        <th scope="col" colspan="6" class="table-warning">
                            <p class="text-center display-6">Data Tidak Ditemukan..!!!</p>
                        </th>
                    </tr>
                </tfoot>
                <?php endif; ?>
            </table>
        </div>
    </div>


</div>

<?php footer() ?>