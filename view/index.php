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
<!doctype html5>
<html>

<head>
    <link href="../CSS/main.css" rel="stylesheet" type="text/css">
    <script>
    type = "text/javascript"
    src = "javascript.js" >
    </script>
    <title>Home</title>
</head>

<body>
    <section class="hero">
        <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="vehiclelist_view.php">Vehicle List</a>
            <a href="admintools_view.php">Admin Tools</a>
            <a href="signup.php">Sign up</a>
            <div class="login-container">
                <form method="post">
                    <input type="text" name="user_uid" placeholder="Username" name="username">
                    <input type="text" name="user_pwd" placeholder="Password" name="psw">
                    <button type="submit" name="login" value="Login">Login</button>
                </form>
            </div>
        </div>



        <!--<ul class="nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="vehiclelist_view.php">VEHICLE LIST</a></li>
        
         <li><a href="admintools_view.php">ADMIN TOOLS</a></li>
   </ul>-->
        <div class="title">
            <h1>Berwyn Bus Hire</h1>
            <?php
         if(isset($_SESSION["user_uid"])){
            echo'<h3>Welcome</h3>';
            echo $_SESSION["user_uid"];
         }else{
            echo'<h3>Welcome Guest</h3>';
         }
      ?>
        </div>

        <body>
            <div class="slideShow">
                <img class="frontEndSlideshow" src="images/bus1.jpg">
                <img class="frontEndSlideshow" src="images/bus2.jpg">
                <img class="frontEndSlideshow" src="images/bus3.jpg">
            </div>
            <script>
            var index = 0;
            slide();

            function slide() {
                var b = document.getElementsByClassName("frontEndSlideshow");
                for (var a = 0; a < 3; a++) {
                    b[a].style.display = "none";
                }
                index++;
                if (index > 3) {
                    index = 1;
                }
                b[index - 1].style.display = "block";
                setTimeout(slide, 5000);
            }
            </script>
            <br><br><br>
            <ul id="menu">
                <li><a href="newVehiclelist_view.php">New Vehicles</li>
                <li><a href="vehiclelist_view.php">MPV</li>
                <li><a href="vehiclelist_view.php">VIP COACH</li>
                <li><a href="vehiclelist_view.php">MINIBUS</li>
                <li><a href="vehiclelist_view.php">COACH</li>
                <li><a href="vehiclelist_view.php">BUS</li>
                <li><a id="temp" href="vehiclelist_view.php">MINI COACH</li>
            </ul>
            <div class="Promotions">
                <h2> Promotions </h2>
                <img class="frontEndSlideShow" src="images/promotion1.jpg">
                <img class="frontEndSlideShow" src="images/promotion2.jpg">
                <img class="frontEndSlideShow" src="images/promotion3.jpg">
            </div>
            <script>
            var index = 0;
            slide();

            function slide() {
                var b = document.getElementsByClassName("frontEndSlideshow");
                for (var a = 0; a < 3; a++) {
                    b[a].style.display = "none";
                }
                index++;
                if (index > 3) {
                    index = 1;
                }
                b[index - 1].style.display = "block";
                setTimeout(slide, 5000);
            } <
            /section>
            </script>

            <span id="team">
                <section class="team">
                    <center>
                        <h1>Promotions</h1>
                        <div class="team-wrapper">
                            <div class="col-team">
                                <div class="col">
                                    <img src="images/bus1.jpg" alt="pic" width="200" height="95">
                                    <hr>
                                    <h3>Bus</h3>
                                    <p>£100</p>
                                </div>
                            </div>
                            <div class="col-team">
                                <div class="col">
                                    <img src="images/bus2.jpg" alt="" width="200" height="95">
                                    <hr>
                                    <h3>Coach</h3>
                                    <p>£200</p>
                                </div>
                            </div>
                            <div class="col-team">
                                <div class="col">
                                    <img src="images/bus3.jpg" alt="" width="200" height="95">
                                    <hr>
                                    <h3>Vip Coach</h3>
                                    <p>£300</p>
                                </div>
                            </div>
                        </div>
                    </center>
                </section>
            </span>


        </body>

</html>