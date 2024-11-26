<?php 
session_start(); 

// Cek jika session 'role' ada dan nilainya 'user'
if(isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
    // Role adalah 'user', tidak perlu menampilkan apa-apa disini, kita akan tampilkan di bagian HTML
} else {
    // Jika bukan role 'user', logout dan redirect ke index
    session_destroy();
    echo "Anda bukan role user";
    header('location: index.php'); // Perbaiki 'localtion' menjadi 'location'
    exit(); // Tambahkan exit setelah header untuk menghentikan eksekusi
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Pastikan session 'name' ada sebelum menampilkan -->
    <?php
    if(isset($_SESSION['name'])) {
        echo "<h1>Selamat datang, " . $_SESSION['name'] . "!</h1>";
    } else {
        echo "<h1>Selamat datang, Pengguna!</h1>";
    }
    ?>
    <a href="backend/logout.php">Logout</a>
</body>
</html>
