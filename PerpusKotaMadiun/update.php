<?php
include 'koneksi.php';

$nama       = $_POST['nama'];
$alamat     = $_POST['alamat'];
$no_hp      = $_POST['no_hp'];

$query = mysqli_query($koneksi, "
    UPDATE anggota SET `Nama`   = '$nama', `Alamat` = '$alamat', `No HP`  = '$no_hp'
    WHERE `No HP` = '$no_hp'
");

if ($query) {
    header("location:index.php?pesan=update");
} else {
    echo "Gagal update data: " . mysqli_error($koneksi);
}
?>
