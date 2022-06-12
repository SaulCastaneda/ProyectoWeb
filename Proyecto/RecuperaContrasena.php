<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Recuperar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSite</title>
    <link rel="icon" type="image/x-icon" href="imagenes/LogoWebSite.ico">
</head>
<body>
    <div class="login-box">
      <img src="Imagenes/LogoWebSite.png" class="avatar" alt="Avatar Image">
      <h1>Forgot Password</h1>
      <form action="RecuperContrasena.php" method="POST">
        <!-- USERNAME INPUT -->
        <label for="Email">Email</label>
        <input  name ="Mail"type="text" placeholder="Enter Email">
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input  name ="pass" type="password" placeholder="Enter Password">
        <input type="submit" value="Update Password">
         <a href="index.php">Back To Login</a><br>
        <a href="NuevaCuenta.php">Don't have An account?</a>
</form>
        <?php
        if($_POST){
          $Mail= $_POST['Mail'];
          $Contra =$_POST['pass'];
          $mysqli = new mysqli('localhost', 'root', '', 'proyecto');
          if (mysqli_connect_errno()) {
            echo 'Erro: ' . mysqli_connect_error();
        } else {
            $sql = 'UPADTE USERS SET PASSWORD="'.$Contra.'"where Email ="'. $Mail.'"';
  
            if ($result = $mysqli->query($sql)) {
                while ($row = $result->fetch_assoc())
                 {
                    echo  '<script>alert("Contraseña Actulizada.")</script';
                    header('location: index.php');
                  

                }
            } else {
                echo  '<script>alert("Error al actualizar Contraseña.")</script';
            }
        }
      }
      ?>
</body>
</html>