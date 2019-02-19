<?php
   require_once "../model/dataAccess.php";
?>
<!doctype html>
<html>
   <head>
      <link href="../CSS/table.css" rel="stylesheet" type="text/css">
      <title>Log in</title>
      <div class = center>
         <h1>Log in</h1>
      </div>
   </head>
   <body>
      <div class = "center">
         <form action="">
            Name:<br>
            <input type="text" name="firstname">
            <br>Password:<br>
            <input type="text" name="lastname">
            <br><br>
            <input type="submit" value="Submit">
         </form>
         <a href="signup.php">SignUp</a>
      </div>
   </body>
</html>