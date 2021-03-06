<?php
   session_start();
   
   $host= "kunet";
   $username= "k1745856";
   $password= "Badpassword";
   $database= "db_k1745856";
   $message= "";
  
   try{
    $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    if(isset($_POST["register"])){
        if(empty($_POST["user_first"])||empty($_POST["user_last"])||empty($_POST["user_email"])||empty($_POST["user_uid"])||empty($_POST["user_pwd"])){
            $message = '<label> ALL FIELDS ARE REQUIRED</label>';
        }else{
            $query = "SELECT * FROM users WHERE user_uid = :user_uid";
            $statement = $connect->prepare($query);
            $statement->execute(array('user_uid'=>$_POST["user_uid"]));
            $count = $statement->rowCount();
            if($count > 0){
                $message = '<label>User Already Exists</label>';
            }else{
                $insertQuery = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES (:user_first, :user_last, :user_email, :user_uid, :user_pwd)";
                $statement = $connect->prepare($insertQuery);
                $statement->execute(array(':user_first'=>$_POST['user_first'],':user_last'=>$_POST['user_last'],':user_email'=>$_POST['user_email'],':user_uid'=>$_POST['user_uid'],':user_pwd'=>$_POST['user_pwd']));
                $message = '<label>Account created!</label>';
            }
        }
    }
   }
   catch(PDOExeption $error){
    $message = $error->getMessage();
   }
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    </head>

    <header>
    <div class="topnav">
    <a class="active" href="index.php" alt="Index link">Home</a>
    <a href="vehiclelist_view.php" alt="Vehicle list link">Vehicle List</a>
    <a href="admintools_view.php" alt="Admin tools link">Admin Tools</a>
    <a href="signup.php" alt="Sign up link">Sign up</a>
    <a href="basket_view.php" alt="Basket link">Basket</a>
    <div class="login-container">
    </div>
    </header>
    <div class = "title">
         <h1>Sign Up</h1>
   </div>
    <body>
      <div class = "title">
        <form method="post">
            <input type="text" name="user_first" placeholder="Firstname" > 
            <br /><br style="line-height:1vh"/>
            <input type="text" name="user_last" placeholder="Lastname">
            <br /><br style="line-height:1vh"/>
            <input type="text" name="user_email" placeholder="E-mail">
            <br /><br style="line-height:1vh"/>
            <input type="text" name="user_uid" placeholder="Username">
            <br /><br style="line-height:1vh"/>
            <input type="password" name="user_pwd" placeholder="Password">
            <br /><br style="line-height:1vh"/>
            <button type="submit" name="register" id="register" value="Register">Signup</button>
         </form>
         <?php
        if(isset($message)){
            echo '<br><label>'.$message.'</label>';
        }
    ?>
      </div>
   </body>
</html>