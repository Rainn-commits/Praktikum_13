<?php
include 'koneksi.php';

$npm    = $_POST['npm'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas  = $_POST['kelas'];

$query = mysqli_query($koneksi, 
    "INSERT INTO mahasiswa (npm, nama, alamat, kelas)
     VALUES ('$npm', '$nama', '$alamat', '$kelas')"
);

if ($query) {
    header("location:index.php?pesan=input");
} else {
    echo "Gagal input data: " . mysqli_error($koneksi);
}
?>
