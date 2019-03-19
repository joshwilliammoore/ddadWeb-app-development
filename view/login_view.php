<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    </head>

    <header>
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="vehiclelist_view.php">Vehicle List</a>
  <a href="admintools_view.php">Admin Tools</a>
  <a href="signup.php">Sign up</a>
  <div class="login-container">
    <form action="login.php">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>
</div>
    </header>
    <div class = "title">
         <h1>Login</h1>
   </div>
    <body>
      <div class = "title">
         <form action="logincontroller.php" method="POST">
            <input name="username" placeholder="Username" > 
            <br /><br style="line-height:1vh"/>
            <input type="password" name="pssword" placeholder="Password">
            <br /><br style="line-height:1vh"/>
            <input type="submit" value="Login"/>
            <?php if($error): ?>
                <br/>Please enter a correct username and password.
            <?php endif ?>
         </form>
      </div>
   </body>
</html>