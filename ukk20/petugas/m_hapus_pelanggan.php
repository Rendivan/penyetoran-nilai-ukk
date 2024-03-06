<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<center> 
<h1><a href="#" class="login-forgot-pass">PELANGGAN SUDAH MELAKUKAN INSTRUKSI</a></h1> 
</center>
 <script src="../js/bootstrap.min.js"></script> -->
</body>
</html>
<?php
//ambil koneksi
include "../config.php";

//ambil data id_barang dari URL
$id_pelanggan = $_GET['id_pelanggan'];

//hapus barang berdasarkan id_pelanggan
$data = mysqli_query($koneksi, "DELETE FROM tb_penjualan WHERE id_pelanggan='$id_pelanggan'");

//hapus barang berdasarkan id_pelanggan 
$sql = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'");



//jika berhasil kembali ke v_penjualan.php
if ($sql) {
  header('location: v_penjualan.php');
}

