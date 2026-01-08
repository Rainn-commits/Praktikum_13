<?php 
include 'koneksi.php';

$no_hp = $_GET['no_hp'];

$id_aman = mysqli_real_escape_string($koneksi, $no_hp);

$query = mysqli_query($koneksi,"DELETE FROM anggota WHERE `No HP`='$no_hp'") 
         or die(mysqli_error($koneksi));

if($query){
    header("location:index.php?pesan=hapus");
} else {
    echo "Data gagal dihapus!";
}
?>