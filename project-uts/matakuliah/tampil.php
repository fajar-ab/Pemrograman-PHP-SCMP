<?php
require_once '../template/template.php';
require_once "../function.php";

$sql = "SELECT * FROM tb_mata_kuliah";

$data = query($sql);
?>


<?php head('Matakuliah') ?>

<div class="container pt-5">

    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../index.php">
                Jadwal Matakuliah
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">
                List Matakuliah
            </a>
        </li>
    </ul>

    <div class="card mt-4">
        <div class="card-header">
            <div class="row">
                <div class="col-sm">
                    <i class="fa-solid fa-table"></i>
                    <span class="ms-2">List Mata Kuliah</span>
                </div>
                <div class="col-sm">
                    <div class="row">
                        <div class="col">
                        </div>
                        <div class="col-sm-3">
                            <a class="btn btn-primary btn-sm" href="tambah.php" role="button">
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
                            <i class="fa-solid fa-code"></i>
                            <span class="ms-2">Code</span>
                        </th>
                        <th scope="col">
                            <i class="fa-solid fa-book"></i>
                            <span class="ms-2">Nama Mata Kuliah</span>
                        </th>
                        <th scope="col">
                            <i class="fa-solid fa-chalkboard-user"></i>
                            <span class="ms-2">Dosen</span>
                        </th>
                        <th scope="col">
                            <i class="fa-solid fa-door-closed"></i>
                            <span class="ms-2">Ruangan</span>
                        </th>
                        <th scope="col">
                            <i class="fa-solid fa-hashtag"></i>
                            <span class="ms-2">SKS</span>
                        </th>
                        <th scope="col">
                            <i class="fa-solid fa-hashtag"></i>
                            <span class="ms-2">Semester</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $td) : ?>
                        <tr>
                            <td class="text-center">
                                <div class="btn-group dropend">
                                    <button type="button" class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    </button>
                                    <ul class="dropdown-menu" style="font-size: .9em">
                                        <li>
                                            <a class="dropdown-item" href="edit.php?id=<?= $td[0] ?>">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <span class="ms-2">Ubah</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="hapus.php?id=<?= $td[0] ?>">
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
                            <td class="text-center"><?= $td[4] ?></td>
                            <td class="text-center"><?= $td[5] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>

<?php footer() ?>