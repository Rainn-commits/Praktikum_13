<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Service Motor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2><center>Form Service Motor</center></h2>
    <form method="post" class="form-grid">
        <label>ID:</label>
        <input type="int" name="id" required>

        <label>Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" required>

        <label>Merek Motor:</label>
        <input type="text" name="merek_motor" required>

        <label>Keluhan:</label>
        <input type="text" name="keluhan" required>

        <div></div>
        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        mysqli_query($koneksi,
            "INSERT INTO pelanggan VALUES
            (NULL,'$_POST[nama_pelanggan]','$_POST[merek_motor]','$_POST[keluhan]')"
        );
        header("location:index.php");
    }
    ?>

<h3><center>Data Pelanggan</center></h3>
<table>
<tr>
    <th>ID</th>
    <th>Nama Pelanggan</th>
    <th>Merek Motor</th>
    <th>Keluhan</th>
    <th>Opsi</th>
</tr>

<?php
$data = mysqli_query($koneksi,"SELECT * FROM pelanggan");
while($d=mysqli_fetch_assoc($data)){
?>
<tr>
    <td><?= $d['ID']; ?></td>
    <td><?= $d['Nama Pelanggan']; ?></td>
    <td><?= $d['Merek Motor']; ?></td>
    <td><?= $d['Keluhan']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['ID']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $d['ID']; ?>"
           onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</div>

<footer class="footer">
    © 2025 | Yanuar Andina Rahayu - 2305101065
</footer>

</body>
</html>