<!DOCTYPE html>
<html>
<head>
    <title>Membuat Database dan Menampilkan data dari database dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="judul">
    <h1>Membuat Koneksi Dengan PHP dan MySQL</h1>
    <h2>Menampilkan Data dari Database</h2>
    <h3>www.unipma.ac.id</h3>
</div>

<br/>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "input") {
        echo "<p class='pesan sukses'>Data berhasil di input.</p>";
    } elseif ($_GET['pesan'] == "update") {
        echo "<p class='pesan sukses'>Data berhasil di update.</p>";
    } elseif ($_GET['pesan'] == "hapus") {
        echo "<p class='pesan sukses'>Data berhasil di hapus.</p>";
    }
}
?>

<br>
<a class="tombol" href="input.php"><u>+ Tambah Data Mahasiswa</u></a>
</br>

<br>
<h3>Data User:</h3>

<table border="1" class="table">
<tr>
    <th>NPM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Kelas</th>
    <th>Opsi</th>
</tr>

<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?php echo $data['npm']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td><?php echo $data['kelas']; ?></td>
    <td>
        <a class="edit" href="edit.php?npm=<?php echo $data['npm']; ?>">Edit</a> |
        <a class="hapus" href="hapus.php?npm=<?php echo $data['npm']; ?>"
           onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

<footer class="footer">
    <p>© 2025 | Yanuar Andina Rahayu - 2305101065</p>
</footer>

</body>
</html>
