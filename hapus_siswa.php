<?php
$koneksi = mysqli_connect("localhost", "root", "", "test_siswa");
$id = $_GET['id-siswa'];

$query = "DELETE FROM siswa WHERE id_siswa = '$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script> window.location='?page=siswa';</script>";
} else {
    echo "<script>alert('Gagal menghapus data!');</script>";
}