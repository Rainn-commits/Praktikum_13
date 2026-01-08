<?php 
include 'koneksi.php';

$npm = $_GET['npm'];

$npm_aman = mysqli_real_escape_string($koneksi, $npm);

$query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE npm='$npm_aman'") 
         or die(mysqli_error($koneksi));

if($query){
    header("location:index.php?pesan=hapus");
} else {
    echo "Data gagal dihapus!";
}
?>