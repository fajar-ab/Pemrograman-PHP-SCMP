<?php 

require_once "tampil.php";
require_once "cari.php";

$rows = queryTampil("SELECT * FROM penduduk");

if (isset($_POST['cari'])) {
    $rows = queryCari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tampil Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <h2>Data Penduduk</h2>

        <nav>
            <a href="form_input.php" class="">🙎‍♂️ tambah data</a>
            <span>
                <form action="" method="POST">
                    <button type="submit" name="cari">🔍</button>
                    <input type="text" name="keyword" autofocus autocomplete="off" placeholder="masukkan keyword pencarian">
                </form>
            </span>
        </nav>

        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($rows as $row) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row[1]; ?></td>
                        <td><?= $row[2]; ?></td>
                        <td><?= $row[3]; ?></td>
                        <td><?= $row[4]; ?></td>
                        <td style="text-align: center;">
                            <a href="form_update.php?id=<?= $row[0]; ?>">✏️ <span>edit</span></a> |
                            <a href="hapus.php?id=<?= $row[0]; ?>">🗑️ <span>hapus</span></a>
                        </td>
                    </tr>
                <?php
                    $no++;
                endforeach; ?>
            </tbody>
        </table>

    </div>

</body>

</html>