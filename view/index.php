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
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="#">Brand</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="#" class="nav-link">More</a></li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                       <li class="px-3 py-2">
                           <form class="form" role="form">
                                <div class="form-group">
                                    <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <div class="form-group text-center">
                                    <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Forgot password</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Reset your password..</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
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