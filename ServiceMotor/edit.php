<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pelanggan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2><center>Edit Data Pelanggan</center></h2>

<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?= $d['ID']; ?>">

    <label>Nama Pelanggan:</label>
    <input type="text" name="nama_pelanggan" value="<?= $d['Nama Pelanggan']; ?>" required>

    <label>Merek Motor:</label>
    <input type="text" name="merek_motor" value="<?= $d['Merek Motor']; ?>" required>

    <label>Keluhan:</label>
    <input type="text" name="keluhan" value="<?= $d['Keluhan']; ?>" required>

    <button type="submit">Update</button>
</form>
</div>

</body>
</html>