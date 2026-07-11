<?php
include 'Tugas_koneksi.php';

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM produk WHERE id_produk='$id'");

header("Location:Tugas_index.php");
?>