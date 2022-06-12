    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WebSite</title>
        <link rel="icon" type="image/x-icon" href="imagenes/LogoWebSite.ico">
        <link rel="stylesheet" href="css/Singup.css">
        <div class="login-box">
        <img src="Imagenes/LogoWebSite.png" class="avatar" alt="Avatar Image">
        <h1> Sing UP</h1>
          <!-- USERNAME INPUT -->
          <form action="NuevaCuenta.php" method="POST">
          <label for="Name">Name</label>
          <input  name="name" type="text" placeholder="Enter Name"required>
          <label  for="email">Email</label>
          <input  name="email" type="text" placeholder="Enter email"required>
          <!-- PASSWORD INPUT -->
          <label for="password">Password</label>
          <input  name='Contra'  type="password" placeholder="Enter Password"required>
          <INPUT  type="submit" value="Sing In">
          <a href="index.php">Back To Login</a><br>
  </form>
         
<?php
    if($_POST){
      $nombre =  $_POST['name'];
      $email =   $_POST['email'];
      $contra  = $_POST['Contra'];
      $mysqli = new mysqli('localhost', 'root', '', 'proyecto');
      $sql = 'INSERT INTO USERS(NAME, Email, PASSWORD) values ("' . $nombre. '", "' . $email. '", "' . $contra . '");';
      $result = $mysqli->query($sql);
      if($sql)
      {
          echo '<script>alert("Usuario Registrado.")</script';
          header('location: index.php');
      }

    }

?>
    </head>
    <body>
    </body>
    </html>