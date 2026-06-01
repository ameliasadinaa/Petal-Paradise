<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="card">

<h1>🌸 Daftar Produk</h1>

<a href="tambah.php" class="btn">
    ➕ Tambah Produk
</a>

<br><br>

<table>

<tr>
    <th>ID</th>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php

$data = mysqli_query($conn,
"SELECT * FROM produk");

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?= $d['id']; ?></td>
    <td><?= $d['nama_produk']; ?></td>
    <td><?= $d['harga']; ?></td>
    <td><?= $d['stok']; ?></td>

    <td>

<a href="edit.php?id=<?= $d['id']; ?>"
class="btn-edit">
    ✏️ Edit
</a>

<a href="hapus.php?id=<?= $d['id']; ?>"
class="btn-delete"
onclick="return confirm('Yakin ingin menghapus produk ini?')">
    🗑️ Hapus
</a>

</td>
</tr>

<?php } ?>

</table>

</div>
</div>

</body>
</html>
<a href="dashboard.php" class="btn">
    🏠 Dashboard
</a>