<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    </head>

    <header>
        <ul class="nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="vehiclelist_view.php">VEHICLE LIST</a></li>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="signup.php">SIGNUP</a></li>
        </ul>
    </header>
    <div class = "title">
         <h1>Signup</h1>
   </div>
    <body>
      <div class = "title">
        <form method="post" action="" name="signup">
            <input type="text" name="first" placeholder="Firstname" > 
            <br>
            <input type="text" name="last" placeholder="Lastname">
            <br>
            <input type="text" name="email" placeholder="E-mail">
            <br>
            <input type="text" name="uid" placeholder="Username">
            <br>
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="signupSubmit">Signup</button>
         </form>
      </div>
   </body>
</html>