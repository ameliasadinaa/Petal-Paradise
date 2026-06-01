<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bloom Market Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <div class="card">

        <h1>🌸 Bloom Market</h1>

        <h3>
            Selamat Datang,
            <?php echo $_SESSION['username']; ?>!
        </h3>

        <p>
            Kelola produk toko Anda dengan mudah.
        </p>

        <br>

        <a href="produk.php" class="btn">
    📦 Kelola Produk
        </a>

        <a href="logout.php" class="btn">
    🚪 Logout
        </a>

    </div>

</div>


</body>
</html>