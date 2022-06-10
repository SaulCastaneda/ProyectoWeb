    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WebSite</title>
        <link rel="stylesheet" href="css/Singup.css">
        <div class="Singup-box">
        <img src="Imagenes/LogoWebSite.png" class="avatar" alt="Avatar Image">
        <h1> Sing UP</h1>
        <form>
          <!-- USERNAME INPUT -->
          <label for="Name">Name</label>
          <input type="text" placeholder="Enter Name">
          <label for="email">Email</label>
          <input  type="text" placeholder="Enter email">
          <!-- PASSWORD INPUT -->
          <label for="password">Password</label>
          <input  type="password" placeholder="Enter Password">
          <input  type="submit" value="Sing In">
          <a href="index.php">Back To Login</a><br>
          <?php
           define('DB_SERVER','localhost'); 
           define('DB_NAME','bliblotecamusical'); 
           define('DB_USER','root'); 
           define('DB_PASS','');
           $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS); 
          mysqli_select_db(DB_NAME,$con);  
          ?>
    </head>
    <body>
    </form>
    </body>
    </html>