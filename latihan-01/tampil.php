<?php 
include_once "koneksi.php";

$sql = "SELECT * FROM penduduk";
$tampil = mysqli_query($connection, $sql);


$temp = [];
while($data = mysqli_fetch_row($tampil)) {
    // $nik = $data[0];
    // $nama = $data[1];
    // $jk = $data[2];
    // $alamat = $data[3];


    // echo $nik;
    // echo $nama;
    // echo $jk;
    // echo $alamat;

    $temp[] = $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style></style>
</head>
<body>
    
    <table border="1" cellspacing="0" cellpadding="7">
        <?php foreach ($temp as $t) : ?>
        <tr>
            <td><?= $t[0] ?></td>
            <td><?= $t[1] ?></td>
            <td><?= $t[2] ?></td>
            <td><?= $t[3] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>