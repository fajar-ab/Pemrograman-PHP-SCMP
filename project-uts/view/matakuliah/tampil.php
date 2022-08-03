<?php
require_once __DIR__ . '/../../src/matakuliah/function.php';
require_once __DIR__ . '/../../src/helper/pesan.php';

// ambil data matakuiah
$dataMatakuliah = dataMatakuliah();

// hapus
if (isset($_GET['hapus'])) {
  matakuliahHapus($_GET['hapus']);
}
?>


<!-- card table -->
<div class="card">
  <div class="card-header">
    <div class="user-select-none text-muted">
      <i class="fa-solid fa-table me-2"></i>
      List Matakuliah
    </div>
  </div>
  <div class="card-body">

    <!-- table matakuliah -->
    <div class="table-responsive">
      <table class="table text-nowrap">
        <thead>
          <tr>
            <th role="col"></th>
            <th role=" col"><i class="fa-solid fa-code me-2"></i>Kode</th>
            <th role="col"><i class="fa-solid fa-book-open me-2"></i>Nama Matakuliah</th>
            <th role="col"><i class="fa-solid fa-chalkboard-user me-2"></i>Dosen</th>
            <th role="col"><i class="fa-solid fa-door-closed me-2"></i>Ruangan</th>
            <th role="col"><i class="fa-solid fa-hashtag me-2"></i>SKS</th>
            <th role="col"><i class="fa-solid fa-hashtag me-2"></i>Semester</th>
          </tr>
        </thead>
        <?php if (count($dataMatakuliah) > 0) : ?>
          <!-- table body -->
          <tbody>
            <?php foreach ($dataMatakuliah as $matakuliah) : ?>
              <tr>
                <!-- menu aksi -->
                <td style="padding-left: 0;padding-right: 0">
                  <div class="dropend">
                    <button type="button" class="btn btn-link btn-rounded btn-sm dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="?halaman=ubah-matakuliah&id=<?= $matakuliah[0] ?>">
                          <i class="fa-solid fa-pen-to-square me-1"></i>Edit
                        </a>
                      </li>
                      <li>
                        <a href="#" class="dropdown-item" data-mdb-toggle="modal" data-mdb-target="#hapus">
                          <i class="fa-solid fa-trash me-1"></i>Hapus
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
                <!-- menu aksi -->
                <td class="font-monospace fs-6 text-secondary"><?= $matakuliah[0] ?></td>
                <td class="fw-bolder text-body"><?= $matakuliah[1] ?></td>
                <td><?= $matakuliah[2] ?></td>
                <td>
                  <span class="badge d-inline" id="ruangan-badge">
                    <?= $matakuliah[3] ?>
                  </span>
                </td>
                <td class="text-center"><?= $matakuliah[4] ?></td>
                <td class="text-center"><?= $matakuliah[5] ?></td>
              </tr>

              <!-- modals -->
              <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="modalHapus" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                  <div class="modal-content">
                    <div class="modal-body text-center pt-4">
                      <p class="m-0">Anda yakin ingin menghapus data</p>
                    </div>
                    <div class="modal-footer p-1 mx-auto border-0">
                      <button type="button" class="btn btn-sm btn-secondary d-block" data-mdb-dismiss="modal">
                        Batal
                      </button>
                      <a href="?halaman=matakuliah&hapus=<?= $matakuliah[0] ?>" class="btn btn-sm btn-primary">Hapus</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modals -->
            <?php endforeach ?>
          </tbody>
          <!-- table body -->
        <?php else : ?>
          <tfoot>
            <th colspan="6"></th>
          </tfoot>
        <?php endif ?>
      </table>
    </div>
  </div>
</div>
<!-- card table -->

<!-- menu aksi tambah matakuliah-->
<div class="fixed-action-btn" style="right: 1rem">
  <a href="?halaman=tambah-matakuliah" class="btn btn-floating btn-primary btn-lg" data-mdb-toggle="tooltip" data-mdb-placement="left" title="Tambah Jadawal" style="background-color: #f44336">
    <i class="fas fa-plus"></i>
  </a>
  <ul class="list-unstyled"></ul>
</div>
<!-- menu aksi -->

<!-- javascript -->
<script src="assets\my\js\matakuliah-badge.js"></script>