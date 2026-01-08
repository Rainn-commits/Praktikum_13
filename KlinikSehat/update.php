<?php
include 'koneksi.php';

$id           = $_POST['id'];
$nama_pasien  = $_POST['nama_pasien'];
$umur         = $_POST['umur'];
$keluhan      = $_POST['keluhan'];

$query = mysqli_query($koneksi, "
    UPDATE pasien SET `ID` = '$id', `Nama Pasien` = '$nama_pasien', `Umur` = '$umur', `Keluhan` = '$keluhan'
    WHERE `ID` = '$id'"
);

if ($query) {
    header("location:index.php?pesan=update");
} else {
    echo "Gagal update data: " . mysqli_error($koneksi);
}
?>
