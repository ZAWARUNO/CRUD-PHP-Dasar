<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "data_sekolah";

$db = mysqli_connect($hostname, $username, $password, $database);

if (!$db) {
    die("Koneksi database Gagal");
}