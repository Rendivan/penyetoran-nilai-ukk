<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAMBAH PENGGUNA BARU</title>
</head>

<body>
  <?php include "navbar.php" ?>
  <h1 class="text-dark">TAMBAH PENGGUNA BARU</h1>
  <form action="m_tambah_pengguna_baru.php" method="post">
    <table>
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
      </tr>
    </table>
  </form>
</body>

</html>