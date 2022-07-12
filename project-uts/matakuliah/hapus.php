<?php 
require_once "../function.php";

$id = $_GET['id'];

if (hapusMatakuliah($id) > 0) {
    header('Location: tampil.php');
}