<!-- // Session digunakan untuk menyimpan data pengguna di server selama pengguna masih aktif di website.
// Contohnya: setelah login, nama atau ID user disimpan di session agar bisa diakses di halaman lain. -->
<?php
session_start(); // wajib di baris paling atas

// contoh data login statis
$valid_username = "ramon";
$valid_password = "123456";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    // simpan data ke session
    $_SESSION['username'] = $username;

    // redirect ke dashboard
    header("Location: dashboard.php");
    exit;
} else {
    echo "Login gagal. <a href='login.php'>Coba lagi</a>";
}
?>
