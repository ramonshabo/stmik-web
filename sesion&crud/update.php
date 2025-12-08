<?php 
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$query = mysqli_query($conn,"UPDATE barang set nama_barang='$nama', harga='$harga', stok='$stok' where id=$id");

header('Location: dashboard.php');

?>