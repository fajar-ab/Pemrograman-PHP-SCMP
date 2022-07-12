<?php
require_once 'koneksi.php';



function query($sql)
{
    global $koneksi;
    $stmt = $koneksi->query($sql);
    return $stmt->fetch_all(MYSQLI_NUM);
}

function dataCari($keyword)
{
    global $koneksi;
    $sql = "SELECT tb_jadwal.hari,
        tb_mata_kuliah.nama,
        tb_jadwal.pukul,
        tb_mata_kuliah.ruangan,
        tb_mata_kuliah.dosen
    FROM tb_jadwal
        INNER JOIN tb_mata_kuliah ON tb_jadwal.id_mata_kuliah = tb_mata_kuliah.id_mata_kuliah
    WHERE tb_jadwal.hari LIKE '%{$keyword}%'
        OR tb_mata_kuliah.nama LIKE '%{$keyword}%'
        OR tb_jadwal.pukul LIKE '%{$keyword}%'
        OR tb_mata_kuliah.ruangan LIKE '%{$keyword}%'
        OR tb_mata_kuliah.dosen LIKE '%{$keyword}%'
    ORDER BY tb_jadwal.hari,
        tb_jadwal.pukul";

    $stmt = $koneksi->query($sql);
    return $stmt->fetch_all(MYSQLI_NUM);
}

function mataKuliah($id = null)
{
    global $koneksi;

    $stmt = $koneksi->query(
        "SELECT id_mata_kuliah, nama FROM tb_mata_kuliah"
    );

    while ($data = $stmt->fetch_assoc()) {
        if (!is_null($id)) {
            if ($id == $data['id_mata_kuliah']) {
                echo <<<OPT
                    <option value="{$data['id_mata_kuliah']}" selected>{$data['nama']}</option>
                OPT;
            } else {
                echo <<<OPT
                    <option value="{$data['id_mata_kuliah']}">{$data['nama']}</option>
                OPT;
            }
        } else {
            echo <<<OPT
               <option value="{$data['id_mata_kuliah']}">{$data['nama']}</option>
            OPT;
        }
    }
}


function tambahJadwal($data)
{
    global $koneksi;

    $sql = "INSERT INTO
            tb_jadwal (id_jadwal, hari, id_mata_kuliah, pukul) 
            VALUES (NULL, ?, ?, ?)";

    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param('sss', $hari, $matakul, $pukul);

    $hari = $data['hari'];
    $matakul = $data['matakuliah'];
    $pukul = $data['pukul'];
    $stmt->execute();

    return $stmt->affected_rows;
}

function hapusJadwal($id)
{
    global $koneksi;
    $sql = "DELETE FROM `tb_jadwal` WHERE `tb_jadwal`.`id_jadwal` = ?";

    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    return $stmt->affected_rows;
}

function editJadwal($data)
{
    global $koneksi;
    $sql = "UPDATE `tb_jadwal` 
            SET 
            `hari` = ?, 
            `id_mata_kuliah` = ?, 
            `pukul` = ? 
            WHERE `tb_jadwal`.`id_jadwal` = ?";

    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param('sssi', $hari, $matakul, $pukul, $id);

    $hari = $data['hari'];
    $matakul = $data['matakuliah'];
    $pukul = $data['pukul'];
    $id  = $data['id'];
    $stmt->execute();

    return $stmt->affected_rows;
}

// * /////////////////////////////////////////////////////////////////////////

function tambahMatakuliah($data)
{
    global $koneksi;

    $sql = "INSERT INTO 
            `tb_mata_kuliah` 
            (`id_mata_kuliah`, `nama`, `dosen`, `ruangan`, `sks`, `semester`) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param(
        'ssssii', 
        $kode, $matakuliah, $dosen, $ruangan, $sks, $semester  
    );

    $kode       = $data['code'];
    $matakuliah = $data['matakuliah'];
    $dosen      = $data['dosen'];
    $ruangan    = $data['ruangan'];
    $sks        = $data['sks'];
    $semester   = $data['semester'];
    
    $stmt->execute();

    return $stmt->affected_rows;
}

function hapusMatakuliah($id)
{
    global $koneksi;
    $sql = "DELETE FROM `tb_mata_kuliah` WHERE `tb_mata_kuliah`.`id_mata_kuliah` = ?";

    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param('s', $id);
    $stmt->execute();

    return $stmt->affected_rows;
}

function editMatakuliah($data)
{
    global $koneksi;
    $sql = "UPDATE `tb_mata_kuliah` 
            SET 
            `nama` = ?, 
            `dosen` = ?, 
            `ruangan` = ?, 
            `sks` = ?, 
            `semester` = ? 
            WHERE `tb_mata_kuliah`.`id_mata_kuliah` = ?";
    
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param(
        'sssiis', 
        $matakuliah, $dosen, $ruangan, $sks, $semester, $kode
    );

    $kode       = $data['code'];
    $matakuliah = $data['matakuliah'];
    $dosen      = $data['dosen'];
    $ruangan    = $data['ruangan'];
    $sks        = $data['sks'];
    $semester   = $data['semester'];
    
    $stmt->execute();

    return $stmt->affected_rows;
}
