<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query = "INSERT INTO barang (nama_barang,harga,stok) VALUES('$nama','$harga','$stok')";
$result = mysqli_query($conn,$query);

if($result){
    // redirect ke dashboard
    header("Location: dashboard.php");
    exit;
}
?>