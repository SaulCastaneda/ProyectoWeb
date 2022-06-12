<html>
  <head>
    <meta charset="utf-8">
    <title>Web Site</title>
    <link rel="icon" type="image/x-icon" href="imagenes/LogoWebSite.ico">
    <link rel="stylesheet" href="css/login.css">
  </head>
  
  <body>
    <div class="login-box">
    <form method="post" action="" name="signup-form">
      <img src="Imagenes/LogoWebSite.png" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
        <!-- USERNAME INPUT -->
        <label for="EMAIl">Email</label>
        <input name ="Emial" type="text" placeholder="Email"required>
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input name = "pass" type="password" placeholder="Enter Password"required>
        <input type="submit" value="Log In">
        <a href="RecuperaContrasena.php">Lost your Password?</a><br>
        <a href="NuevaCuenta.php">Don't have An account?</a>
      </form>
      <?php
    if($_POST){
        $Mail= $_POST['Emial'];
        $Contra =$_POST['pass'];
        $mysqli = new mysqli('localhost', 'root', '', 'Proyecto');
        if (mysqli_connect_errno()) {
          echo 'Erro: ' . mysqli_connect_error();
      } else {
          $sql = 'SELECT * FROM USERS where Email = "' . $Mail.'" and Password = "'. $Contra.'"';

          if ($result = $mysqli->query($sql)) {
              while ($row = $result->fetch_assoc()) {
                  session_start();
                  $_SESSION['ID'] = $row['ID'];
                  header('location: menu.php');
              }
          } else {
              echo  '<script>alert("Usuario O Contraseña Equivocado.")</script';
          }
      }
    }
      ?>
</body>
</html>