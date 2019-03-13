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
   <body>
   <section class="hero">
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


   <!--<ul class="nav">
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
   </ul>-->
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
   </div>
   <body>
   <div class ="slideShow">
<img class="frontEndSlideshow" src="images/bus1.jpg">
<img class="frontEndSlideshow" src="images/bus2.jpg">
<img class="frontEndSlideshow" src="images/bus3.jpg">
</div>
<script>
var index = 0;
slide();
function slide(){
var b = document.getElementsByClassName("frontEndSlideshow");
for(var a = 0;a<3;a++){
b[a].style.display="none";
}
index++;
if(index > 3){
index=1;
}
b[index-1].style.display="block";
setTimeout(slide,5000);
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
  <div class = "Promotions">
  <h2> Promotions </h2>
  <img class="frontEndSlideShow" src="images/promotion1.jpg">
  <img class="frontEndSlideShow" src="images/promotion2.jpg">
  <img class="frontEndSlideShow" src="images/promotion3.jpg">
  </div>
  <script>
var index = 0;
slide();
function slide(){
var b = document.getElementsByClassName("frontEndSlideshow");
for(var a = 0;a<3;a++){
b[a].style.display="none";
}
index++;
if(index > 3){
index=1;
}
b[index-1].style.display="block";
setTimeout(slide,5000);
}
</section>
  </script>

  <span id="team">
  <section class="team">
  <center>
    <h1>Team</h1>
  <div class="team-wrapper">
    <div class="col-team">
       <div class="col">
        <img src="images/logo.jpg" alt="pic" width="200" height="95">
        <hr>
       <h3>Abu</h3>
       <p>intelligent</p>
  </div>
    </div>
    <div class="col-team">
       <div class="col">
         <img src="images/logo.jpg" alt="" width="200" height="95">
         <hr>
       <h3>Josh</h3>
       <p>Intelligent</p>
  </div>
    </div>
    <div class="col-team">
       <div class="col">
        <img src="images/logo.jpg" alt="" width="200" height="95">
        <hr>
       <h3>Qasim Ali</h3>
       <p>intelligent</p>
  </div>
    </div>
       </div>
       </center>
       </section>
       </span>

      
   </body>
</html>