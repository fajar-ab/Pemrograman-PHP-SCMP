<?php

const HOSTNAME = 'localhost';
const DATABASE = 'crud_uts';
const USERNAME = 'root';
const PASSWORD = '';

$koneksi = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if ($koneksi->connect_error) {
    die('error: '. $koneksi->connect_error);
}