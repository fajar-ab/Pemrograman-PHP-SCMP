<?php

include_once "data_tampil.php";

$rows = tampil("SELECT nik FROM penduduk");

switch ($_GET['cek']) {
    case 'cari':
        $action = "";
        $button = "🔎 cari";
        break;
    case 'update':
        $action = "form_update.php";
        $button = "✏️ update";
        break;
    case 'hapus':
        $action = "data_hapus.php";
        $button = "🗑️ hapus";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cari</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <h2><?= ucfirst($_GET['cek']) ?> Data Penduduk</h2>

        <ul>
            <li><a href="index.php">👈 kembali</a></li>
        </ul>

        <form class="cari-data" action="<?= $action; ?>" method="POST">
            <input list="keyword" name="keyword" placeholder="cari berdasarkan nik" autofocus>
            <datalist id="keyword">
                <?php foreach ($rows as $row) : ?>
                    <option value="<?= $row[0] ?>">
                <?php endforeach; ?>
            </datalist>
            <button type="submit" name="cari"><?= $button; ?></button>
        </form>

        <?php
        if (isset($_POST['cari'])) :
            include_once "data_cari.php";
        ?>
            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Pendidikan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($rows as $row) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row[0]; ?></td>
                            <td><?= $row[1]; ?></td>
                            <td><?= $row[2]; ?></td>
                            <td><?= $row[3]; ?></td>
                            <td><?= $row[4]; ?></td>
                        </tr>
                    <?php
                        $no++;
                    endforeach; ?>
                </tbody>
                <?php if (count($rows) === 0) : ?>
                <tfoot>
                    <tr>
                        <th colspan="6">Tidak ada data</th>
                    </tr>
                </tfoot>
            <?php endif; ?>
            </table>
        <?php endif; ?>

    </div>

</body>

</html>