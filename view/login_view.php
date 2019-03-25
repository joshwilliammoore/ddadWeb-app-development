<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    </head>

<!--    <header>
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
    </header>-->
    
    <body>
     
      <?php
         if(!isset($_SESSION["adminLoggedIn"])){
          require_once("../controler/adminConfirmation.php");
         }else if(!isset($_SESSION["loggedIn"]))
         {
           require_once("../controler/userConfirmation");
         }
      ?>
   </body>
</html>