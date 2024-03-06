<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/bootstrap.min.css">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petugas</title>
</head>

<body>
  <?php include "navbar.php"; ?>
  <center><h1 class="text-warning bg-dark">Dasboard</h1></center>
  <center><img src="../img/sie4.jpg" alt="" class="img-fluid"></center>
  <div class="card">
    <div class="card-header">
    <center>
    ID : <?= $_SESSION['id_login']; ?>
    </div>

    <div class="card-body">
      <center>
      <blockquote class="blockquote mb-0">
        <p>Pengguna</p>
        <footer class="blockquote-footer"><?= $_SESSION['nama_pengguna']; ?></footer>
      </blockquote>
    </div>
  </div>
  <!-- ID : <?= $_SESSION['id_login']; ?> <br> Pengguna : <?= $_SESSION['nama_pengguna']; ?>
  <script src="../js/bootstrap.min.js"></script> -->
</center>
</body>

</html>