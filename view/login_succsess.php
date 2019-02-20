<?php
session_start();
if(isset($_SESSION["user_uid"])){
    echo'<h3>Login Succsess - '.$_SESSION["user_uid"].'</h3>';
    echo'<br /><br /><a href="logout.php">Logout</a>';
}else{
    header("location:login.php");
}
?>