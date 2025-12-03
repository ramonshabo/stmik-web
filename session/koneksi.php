<?php
$host = "localhost";
$user = "root";       // sesuaikan dengan user MySQL kalian
$pass = "root";           // isi password MySQL kalau ada
$db   = "db_stmikweb";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
