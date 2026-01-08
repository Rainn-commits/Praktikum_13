<?php 
include 'koneksi.php';

$id = $_GET['id'];

$id_aman = mysqli_real_escape_string($koneksi, $id);

$query = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE id='$id_aman'") 
         or die(mysqli_error($koneksi));

if($query){
    header("location:index.php?pesan=hapus");
} else {
    echo "Data gagal dihapus!";
}
?>