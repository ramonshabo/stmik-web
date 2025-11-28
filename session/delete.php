<?php 
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM barang where id= $id");

header("Location:dashboard.php");

?>