<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($conn,
    "INSERT INTO produk(nama_produk,harga,stok,deskripsi)
    VALUES('$nama','$harga','$stok','$deskripsi')");

    header("Location: produk.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">

        <h1>🌸 Tambah Produk</h1>

        <form method="POST">

            <input type="text"
                   name="nama_produk"
                   placeholder="Nama Produk"
                   required>

            <br><br>

            <input type="number"
                   name="harga"
                   placeholder="Harga"
                   required>

            <br><br>

            <input type="number"
                   name="stok"
                   placeholder="Stok"
                   required>

            <br><br>

            <textarea
                name="deskripsi"
                placeholder="Deskripsi Produk"
                rows="4"
                cols="40"></textarea>

            <br><br>

            <button type="submit" name="simpan">
                Simpan
            </button>

        </form>

    </div>
</div>

</body>
</html>

<a href="produk.php" class="btn">
    ⬅️ Kembali
</a>