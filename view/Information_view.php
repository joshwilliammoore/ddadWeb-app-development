<?php
   session_start();
?>
<!doctype html5>
<html>
   <head>
      <link href="../CSS/main.css" rel="stylesheet" type="text/css">
      <script> type="text/javascript" src="javascript.js"></script>
      <title>Home</title>
   </head>
   <ul class="nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="vehiclelist_view.php">VEHICLE LIST</a></li>
        <?php
            if(isset($_SESSION["user_uid"])){
               echo'<li><a href="logout.php">LOGOUT</a></li>';
            }else{
               echo'<li><a href="login.php">LOGIN</a></li>';
               echo'<li><a href="signup.php">SIGNUP</a></li>';
            }
         ?>
         <li><a href="admintools_view.php">ADMIN TOOLS</a></li>
         <li><a href="information_view.php">INFORMATION</a></li>
   </ul>
   <div class = "title">
         <h1>Berwyn Bus Hire</h1>
      <?php
         if(isset($_SESSION["user_uid"])){
            echo'<h3>Welcome</h3>';
            echo $_SESSION["user_uid"];
         }else{
            echo'<h3>Welcome Guest</h3>';
         }
      ?>
      <h3> Information </h3>
   </div>