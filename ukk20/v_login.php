<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>

   <form action="m_login.php" method="post" class="login-form">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="text" class="login-username" name="username_login" autofocus="true" required="true" placeholder="username" />
  <input type="text" class="login-password" name="password_login" required="true" placeholder="Password" />
  <input type="submit" value="Simpan" class="login-submit" />
</form>
<a href="v_ganti_password.php" class="login-forgot-pass">Ganti user</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 
</body>
</html>

