<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan Kota Madiun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">

        <h2><center>Form Anggota Perpustakaan</center></h2>

        <form method="post" class="form-grid">
            <label>Nama</label>
            <input type="text" name="nama">

            <label>Alamat</label>
            <input type="text" name="alamat">

            <label>No HP</label>
            <input type="text" name="no_hp">

            <button type="submit" name="simpan">Simpan</button>
        </form>

        <?php
        if (isset($_POST['simpan'])) {
            mysqli_query($koneksi, "
                INSERT INTO anggota (`Nama`,`Alamat`,`No HP`)
                VALUES ('$_POST[nama]','$_POST[alamat]','$_POST[no_hp]')
            ");
            header("location:index.php");
        }
        ?>

        <h3>Data Anggota</h3>

        <table>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Opsi</th>
            </tr>

            <?php
            $data = mysqli_query($koneksi,"SELECT * FROM anggota");
            while($d=mysqli_fetch_assoc($data)){
            ?>
            <tr>
                <td><?= $d['Nama']; ?></td>
                <td><?= $d['Alamat']; ?></td>
                <td><?= $d['No HP']; ?></td>
                <td>
                    <a href="edit.php?no_hp=<?= $d['No HP']; ?>">Edit</a> |
                    <a href="hapus.php?no_hp=<?= $d['No HP']; ?>"
                       onclick="return confirm('Yakin hapus data?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>    
    </div>
</div>    

    <footer class="footer">
        <p>© 2025 | Yanuar Andina Rahayu - 2305101065</p>
    </footer>
    
</body>
</html>
