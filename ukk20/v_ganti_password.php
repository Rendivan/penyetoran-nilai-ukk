<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ganti user baru</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

  <h1 class="text-dark">Ganti user baru</h1>
  <form action="m_ganti_password_baru.php" method="post">
    <table class="input-group mb-3">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama_pengguna" id=""></td>
      </tr>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username_pengguna" id=""></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="text" name="password_pengguna" id=""></td>
      </tr>
      <tr>
        <td>Status</td>
        <td>:</td>
        <td><select name="status" id="">
            <option value="Administrator">Administrator</option>
            <option value="Petugas">Petugas</option>
          </select></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input class="btn btn-primary" type="submit" value="Simpan"></td>
        <script src="../js/bootstrap.min.js"></script>
      </tr>
    </table>
  </form>
</body>

</html>