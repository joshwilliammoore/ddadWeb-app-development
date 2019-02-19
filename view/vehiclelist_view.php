<?php
require_once "../controler/vehiclelist.php";
require_once "../model/dataAccess.php";
require_once "../model/vehicle.php";
?>
<!doctype html>
<html>
   <head>
      <title>Vehicle List</title>
      <link href="../CSS/table.css" rel="stylesheet" type="text/css">
      <link href="../CSS/main.css" rel="stylesheet" type="text/css">
   </head>
   <ul class="nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="vehiclelist_view.php">VEHICLE LIST</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="signup.php">SIGNUP</a></li>
   </ul>
   <div class = "title">
         <h1>Vehicle List</h1>
   </div>
   <body>
<form method="post" action="vehiclelist_view.php">
Search for vehicle:
<input name="search"/>
<input type="submit" value="Search!"/>
</form>
      <table>
         <thead>
            <tr>
               <th>Vehicle ID</th>
               <th>Number of passengers</th>
               <th>Date available</th>
               <th>Price</th>
               <th>Driving license required</th>
            </tr>
         </thead>
         <tbody>
         <?php foreach ($results as $vehicle): ?>
            <tr>
               <td><?=$vehicle->id?></td>
               <td><?=$vehicle->number_of_passengers?></td>
               <td><?=$vehicle->date_available?></td>
               <td>£<?=$vehicle->price?></td>
               <td><?=$vehicle->driving_license_required?></td>
            </tr>
         <?php endforeach ?>
         </tbody>
      </table>
      <div class="topcorner">
      <form action="login_view.php">
      <input type="submit" value="Log in"/>
      </div>
</form>

   </body>
</html>