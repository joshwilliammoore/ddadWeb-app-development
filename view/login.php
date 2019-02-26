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

    if(isset($_POST["login"])){
        if(empty($_POST["user_uid"])||empty($_POST["user_pwd"])){
            $message = '<label> ALL FIELDS ARE REQUIRED</label>';
        }else{
            $query = "SELECT * FROM users WHERE user_uid = :user_uid AND user_pwd = :user_pwd";
            $statement = $connect->prepare($query);
            $statement->execute(array('user_uid'=>$_POST["user_uid"], 'user_pwd'=>$_POST["user_pwd"]));
            $count = $statement->rowCount();
            if($count > 0){
                $_SESSION["user_uid"] = $_POST["user_uid"];
                header("location:login_succsess.php");
            }else{
                $message ='<label>Wrong Data</label>';
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
        <ul class="nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="vehiclelist_view.php">VEHICLE LIST</a></li>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="signup.php">SIGNUP</a></li>
            <li><a href="admintools_view.php">ADMIN TOOLS</a></li>
        </ul>
    </header>
    <div class = "title">
         <h1>Login</h1>
   </div>
    <body>
    <?php
        if(isset($message)){
            echo '<label>'.$message.'</label>';
        }
    ?>
      <div class = "title">
         <form method="post">
            <input type="text" name="user_uid" placeholder="Username/e-mail" > 
            <br /><br style="line-height:1vh"/>
            <input type="password" name="user_pwd" placeholder="Password">
            <br /><br style="line-height:1vh"/>
            <button type="submit" name="login" value="Login">Login</button>
         </form>
      </div>
   </body>
</html>