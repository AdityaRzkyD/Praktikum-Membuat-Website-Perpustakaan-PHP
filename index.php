<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: login.php');
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan v.2</title>
</head>
<body>
    <h1>Aplikasi Perpustakaan</h1>

    <a href="./buku.php">Lihat Daftar Buku</a>
    <br>
    <a href="./staff.php">Lihat Daftar Staff</a>
    <br>
    <a href="logout.php"><button>Logout</button></a> 
</body>
</html>