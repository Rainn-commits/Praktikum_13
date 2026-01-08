<?php
include "koneksi.php";
$no_hp = $_GET['no_hp'];

$data = mysqli_query($koneksi,
    "SELECT * FROM anggota WHERE `No HP`='$no_hp'"
);
$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">

    <h2><center>Edit Data Anggota</center></h2>

    <form method="post" action="update.php" class="form-grid">
        <input type="hidden" name="no_hp_lama" value="<?= $d['No HP']; ?>">

        <label>Nama</label>
        <input type="text" name="nama" value="<?= $d['Nama']; ?>">

        <label>Alamat</label>
        <input type="text" name="alamat" value="<?= $d['Alamat']; ?>">

        <label>No HP</label>
        <input type="text" name="no_hp" value="<?= $d['No HP']; ?>">

        <button type="submit">Update</button>
    </form>
    </div>

</div>

</body>
</html>
