<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM pasien WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2><center>Edit Data Pasien</center></h2>

<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?= $d['ID']; ?>">

    <label>Nama Pasien:</label>
    <input type="text" name="nama_pasien" value="<?= $d['Nama Pasien']; ?>" required>

    <label>Umur:</label>
    <input type="text" name="umur" value="<?= $d['Umur']; ?>" required>

    <label>Keluhan:</label>
    <input type="text" name="keluhan" value="<?= $d['Keluhan']; ?>" required>

    <button type="submit">Update</button>
</form>
</div>

</body>
</html>
