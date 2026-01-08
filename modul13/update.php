<?php
include "koneksi.php";

$NIM_LAMA = $_POST['NIM_LAMA'];
$NIM      = $_POST['NIM'];
$NAMA     = $_POST['NAMA'];
$KELAS    = $_POST['KELAS'];
$PRODI    = $_POST['PRODI'];
$FAKULTAS = $_POST['FAKULTAS'];
$NO_HP    = $_POST['NO_HP'];

$query = mysqli_query($koneksi, "
    UPDATE MAHASISWA SET
        NIM      = '$NIM',
        NAMA     = '$NAMA',
        KELAS    = '$KELAS',
        PRODI    = '$PRODI',
        FAKULTAS = '$FAKULTAS',
        NO_HP    = '$NO_HP'
    WHERE NIM = '$NIM_LAMA'
");

if ($query) {
    header("Location: index.php?pesan=update");
    exit;
} else {
    echo "Gagal update data: " . mysqli_error($koneksi);
}
