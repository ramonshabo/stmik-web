<?php
session_start();

// cek apakah sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include "koneksi.php";
$query = "SELECT * FROM barang ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        nav {
            margin: 0;
        }
    </style>
</head>
<body>
    <?php include "navbar.php" ?>
    <div class="container my-5">
        <h3>Selamat Datang, <b style="color:blue"><?php echo $_SESSION['username']; ?>!</b></h3><br>
        <a href="add.php" class="btn btn-success mb-2"><i class="bi bi-plus-lg"></i> Tambah Data</a>
        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th class="w-25 text-center">Aksi</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama_barang']; ?></td>
                <td><?= number_format($row['harga'], 0, ',', '.'); ?></td>
                <td><?= $row['stok']; ?></td>
                <td class="text-center">
                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin ingin menghapus data?')" class="btn btn-danger"><i class="bi bi-trash3"></i> Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>
