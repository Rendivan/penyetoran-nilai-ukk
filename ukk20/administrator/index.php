<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administator</title>
  <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
</head>

<body>
  <?php include "navbar.php" ?>
  <center><h1 class="text-warning bg-dark">|SEMANGAT UNTUK HARI INI|</h1></center>
  <!-- ID : <?= $_SESSION['id_login']; ?> <br> Pengguna : <?= $_SESSION['nama_pengguna']; ?>  -->
  <img src="../img/sie7.jpg" alt="" width="1350px" height="300px">
  <?php 
  //ambil koneksi
  include "../config.php";

  //hitung jumlah barang dari tb_barang
  $barang = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_barang");
  $jumlahBarang = mysqli_fetch_assoc($barang);

  //hitung jumlah pembelian dari tb_penjualan
  $penjualan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_penjualan");
  $jumlahPenjualan = mysqli_fetch_assoc($penjualan);

  //hitung jumlah pengguna dari tb_pelanggan
  $pelanggan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_pelanggan");
  $jumlahPelanggan = mysqli_fetch_assoc($pelanggan);
  ?>
  
  <div class="card"><center>
      <div class="card-header">
        ID : <?= $_SESSION['id_login']; ?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>PENGGUNA</p>
          <footer class="blockquote-footer"><?= $_SESSION['nama_pengguna']; ?></footer>
        </blockquote>
        </center>
      </div>
    </div>
<br>
<div class="row">
      <div class="col">
        <div class="card" style="width: 10rem;">
          <img src="../img/sie1.jpg" class="card-img-top" alt="..." height="124px">
          <div class="card-body">
            <p class="card-text">
              <button type="button" class="btn btn-primary">
                Barang <span class="badge text-bg-secondary"> <?= $jumlahBarang['Jumlah']; ?></span>
              </button>
            </p>
          </div>
        </div>
      </div>
</br>
<br>
      <div class="col">
        <div class="card" style="width: 10rem;">
          <img src="../img/sie2.jpg" class="card-img-top" alt="..." height="100px">
          <div class="card-body">
            <p class="card-text">
              <button type="button" class="btn btn-primary">
                Pembelian <span class="badge text-bg-secondary"> <?= $jumlahPenjualan['Jumlah']; ?></span>
              </button>
            </p>
          </div>
        </div>
</br>

      </div>
      <br>
      <div class="col">
        <div class="card" style="width: 10rem;">
          <img src="../img/si3.jpg" class="card-img-top" alt="..." height="100px">
          <div class="card-body">
            <p class="card-text">
              <button type="button" class="btn btn-primary">
                Pelanggan <span class="badge text-bg-secondary"> <?= $jumlahPelanggan['Jumlah']; ?></span>
              </button>
            </p>
          </div>
        </div>
      </div>
    </div>
</br>

    

  <!-- <table class="table table-striped table-hover">
    <tr>
      <td>Data Barang</td>
      <td>Data Pembelian</td>
      <td>Data Pelanggan</td>
    </tr>
    <tr>
      <td><?= $jumlahBarang['Jumlah']; ?></td>
      <td><?= $jumlahPenjualan['Jumlah']; ?></td>
      <td><?= $jumlahPelanggan['Jumlah']; ?></td>
    </tr>
     <script src="../js/bootstrap.min.js"></script>
  </table> -->
</body>

</html>