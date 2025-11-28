<?php 
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM barang where id =$id");
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Form Input Barang</title>
</head>
<body>
    <?php include "navbar.php" ?>
        
    <div class="container mt-4 col-md-6">
      <h2>Form Edit Barang</h2>
        <form class="mt-3" action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['nama_barang'] ?>" required>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $row['harga'] ?>" required>
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control" id="stok" name="stok" value="<?= $row['stok'] ?>" required>
          </div>
          <button type="submit" class="btn btn-warning"><i class="bi bi-floppy"></i> Update</button>
          <button type="reset" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancel</button>
          <a href="javascript:history.back()" class="btn btn-secondary"><i class="bi bi-arrow-left-circle"></i> Back</a>
        </form>
    </div>
</body>
</html>