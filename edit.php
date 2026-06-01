<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM produk WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($conn,
    "UPDATE produk SET
    nama_produk='$nama',
    harga='$harga',
    stok='$stok',
    deskripsi='$deskripsi'
    WHERE id='$id'");

    header("Location: produk.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="card">

<h1>🌸 Edit Produk</h1>

<form method="POST">

<input
type="text"
name="nama_produk"
value="<?= $d['nama_produk']; ?>"
required>

<br><br>

<input
type="number"
name="harga"
value="<?= $d['harga']; ?>"
required>

<br><br>

<input
type="number"
name="stok"
value="<?= $d['stok']; ?>"
required>

<br><br>

<textarea
name="deskripsi"><?= $d['deskripsi']; ?></textarea>

<br><br>

<button type="submit" name="update">
    Update Produk
</button>

</form>

</div>

</div>

</body>
</html>

<a href="produk.php" class="btn">
    ⬅️ Kembali
</a>