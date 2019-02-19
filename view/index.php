<?php
   ?>
<!doctype html5>
<html>
   <head>
      <link href="../CSS/main.css" rel="stylesheet" type="text/css">
      <title>Home</title>
   </head>
   <ul class="nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="vehiclelist_view.php">VEHICLE LIST</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="signup.php">SIGNUP</a></li>
   </ul>
   <div class = "title">
         <h1>Berwyn Bus Hire</h1>
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
   </body>
</html>