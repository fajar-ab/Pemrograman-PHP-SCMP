<?php 
require_once "../function.php";

$id = $_GET['id'];

if (hapusJadwal($id) > 0) {
    header('Location: ../index.php');
}