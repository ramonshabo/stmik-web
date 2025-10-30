<?php
session_start();

// cek apakah sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include "koneksi.php";

$query = "SELECT * FROM barang";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <b style="color:blue"><?php echo $_SESSION['username']; ?>!</b></h2>
    <p>Anda berhasil login.</p>
    <a href="logout.php">Logout</a>

    <h2>Daftar Barang</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . htmlspecialchars($row['nama_barang']) . "</td>";
            echo "<td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>";
            echo "<td>" . $row['stok'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
