<?php
$host = "localhost";
<<<<<<< HEAD
$user = "root";       // sesuaikan dengan user MySQL kalian
=======
$user = "root";       // sesuaikan dengan user MySQL kamu
>>>>>>> e4a704a1ae68c4ca394e2c7382386f1076737ff9
$pass = "";           // isi password MySQL kalau ada
$db   = "db_stmikweb";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
