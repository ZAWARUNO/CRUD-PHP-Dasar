<?php
include "service/database.php";
$id = $_GET['id'];

$query = "DELETE FROM siswa_guru WHERE id = '$id'";
$result = mysqli_query($db, $query);

if ($result) {
    echo "<script> window.location='?page=layout/lihat_data';</script>";
} else {
    echo "<script>alert('Gagal menghapus data!');</script>";
}