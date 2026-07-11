<?php
include 'Tugas_koneksi.php';

if(isset($_POST['simpan'])){

    $produk = $_POST['produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

    mysqli_query($conn,"INSERT INTO produk (nama_produk,harga,stok)
    VALUES ('$produk','$harga','$stok')");

    header("Location:Tugas_index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>

<h2>Tambah Produk</h2>

<form method="POST">

Nama Produk <br>
<input type="text" name="produk" required>

<br><br>

Harga <br>
<input type="number" name="harga" required>

<br><br>

Stok <br>
<input type="number" name="stok" required>

<br><br>

<input type="submit" name="simpan" value="Simpan">

</form>

<br>

<a href="Tugas_index.php">Kembali</a>

</body>
</html>