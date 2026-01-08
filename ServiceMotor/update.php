<?php
include 'koneksi.php';

$id = $_POST['id'] ?? '';
$nama_pelanggan = $_POST['nama_pelanggan'] ?? '';
$merek_motor = $_POST['merek_motor'] ?? '';
$keluhan = $_POST['keluhan'] ?? '';

$query = mysqli_query($koneksi, "
    UPDATE pelanggan 
    SET 
        `ID` = '$id',
        `Nama Pelanggan` = '$nama_pelanggan',
        `Merek Motor` = '$merek_motor',
        `Keluhan` = '$keluhan'
    WHERE `ID` = '$id'
");

if ($query) {
    header("Location: index.php?pesan=update");
    exit;
} else {
    echo "Gagal update data: " . mysqli_error($koneksi);
}
