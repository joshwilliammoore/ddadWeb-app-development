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
            <li><a href="admintools_view.php">ADMIN TOOLS</a></li>
            <li><a href="Information_view.php">INFORMATION</a></li>
        </ul>
    </header>
    <div class = "title">
         <h1>Login</h1>
   </div>


<?php
session_start();
if(isset($_SESSION["user_uid"])){
    echo'<h3>Login Succsess - '.$_SESSION["user_uid"].'</h3>';
    echo'<br /><br /><a href="logout.php">Logout</a>';
    header("location:index.php");
}else{
    header("location:login.php");
}
?>
<meta https-equiv="refresh" content="0; URL='kunet.kingston.ac.uk/k1628395/web-app-development/view'"/>
</html>