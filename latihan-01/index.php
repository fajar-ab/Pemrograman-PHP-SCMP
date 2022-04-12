<?php 

require_once "data_tampil.php";

$rows = tampil("SELECT * FROM penduduk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tampil Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <h2>Data Penduduk</h2>

        <ul>
            <li><a href="form_input.php" class="">🙎‍♂️ tambah data</a></li>
            <li><a href="form_cari.php?cek=Cari" class="">🔍 cari data</a></li>
            <li><a href="form_cari.php?cek=Update" class="">✏️ update data</a></li>
            <li><a href="form_cari.php?cek=Hapus" class="">🗑️ hapus data</a></li>
        </ul>

        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
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
                    </tr>
                <?php
                    $no++;
                endforeach; ?>
            </tbody>
        </table>

    </div>

</body>

</html>