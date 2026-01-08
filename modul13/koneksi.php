<?php
$koneksi = mysqli_connect("localhost", "root", "", "unipma");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
