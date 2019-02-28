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
  
  <span id="team">
  <section class="team">
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
        <img src="images.logo.jpg" alt="" width="200" height="95">
        <hr>
       <h3>Qasim Ali</h3>
       <p>intelligent</p>
  </div>
    </div>
       </div>
       </section>
       </span>

      
   </body>
</html>