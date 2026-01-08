<!DOCTYPE html>
<html>
<head>
    <title>Update Data di Database dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Update Data di Database dengan PHP</h1>
        <h2>Update Data dari Database</h2>
        <h3>www.unipma.ac.id</h3>
    </div>
    <br/>
    <a href="index.php">Lihat Semua Data</a>
    <br/>
    <h3>Edit data</h3>

    <?php
    include "koneksi.php";
    
    $npm = $_GET['npm'];
    
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm='$npm'") or die(mysqli_error($koneksi));

    while($data = mysqli_fetch_array($query_mysql)) {
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>NPM</td>
                <td>
                    <input type="text" name="npm" value="<?php echo $data['npm'] ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                    <input type="text" name="kelas" value="<?php echo $data['kelas'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>