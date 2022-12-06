<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logeo</title>
    <link rel="stylesheet" href="CSS/stylelogin.css">
  </head>
  <body>
    <div class="login">
      <img src="img/logo.jfif" class="logo" alt="">
      <h1>Iniciar sesion</h1>
      <form action="conexion/validar_login.php" method="post">
        <!---Direccion IP-->
        <label for="ip">IP</label>
        <input type="text" placeholder="ingresa la direccion IP" name="ip" required>
        <!--usuario-->
        <label for="usuario">Usuario</label>
        <input type="text" placeholder="Enter username" name="usuario" required>
        <!--contraseña-->
        <label class="pass" for="password">Password</label>
        <input type="password" placeholder="Enter password" name="password" required>
        <!--boton-->

        <button class="but">LOGIN</button><br><br>
        <a class="vinculo" href="#">¿Perdiste tu Contraseña?</a>
      </form>
    </div>
  </body>
</html>
