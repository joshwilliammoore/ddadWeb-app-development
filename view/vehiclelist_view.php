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
        <li><a href="admintools_view.php">ADMIN TOOLS</a></li>
        <li><a href="Information_view.php">INFORMATION</a></li>
</ul>
   </ul>
   <div class = "title">
         <h1>Vehicle List</h1>
   </div>
   <body>
<form method="post" action="vehiclelist_view.php">
   Select vehicle:
   <select name="vehicle">
      <option value="standard_mpv">Standard 6 Seat MPV</option>
      <option value="executive_mpv">Executive 8 Seat MPV</option>
      <option value="10_vip_coach">10 Seat VIP Coach</option>
      <option value="14_standard_minibus">14 Seat Standard Minibus</option>
      <option value="16_standard_minibus">16 Seat Standard Minibus</option>
      <option value="16_standard_coach">16 Seat Standard Coach</option>
      <option value="24_standard_coach">24 Seat Standard Coach</option>
      <option value="33_standard_coach">33 Seat Standard Coach</option>
      <option value="49_standard_coach">49 Seat Standard Coach</option>
      <option value="double_coach">73 Seat Double Deck Coach</option>
      <option value="bus">72 Seat Bus</option>
      <option value="16_executive_coach">16 Seat Executive Mini</option>
      <option value="24_executive_coach">24 Seat Executive Mini</option>
      <option value="49_vip_coach">49 Seat VIP Coach</option>
   </select>
   Required Date:
   <input type="date" name="required_date">
   Driver Required:
   <input type="checkbox" name="driver_required">
   <input type="submit" value="Add to Basket">
</form>
<br>

<form method="post" action="vehiclelist_view.php">
Search for vehicle:
<input name="search"/>
<input type="submit" value="Search!"/>
</form>
      <table>
         <thead>

<head>
    <title>Vehicle List</title>
    <link href="../CSS/table.css" rel="stylesheet" type="text/css">
    <link href="../CSS/main.css" rel="stylesheet" type="text/css">
    <link href="../CSS/search.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="clientcode-anon.js"></script>
</head>

<div id="searchfield">
        <form action="vehiclelist_view.php" method="get">
            <input type="text" name="searchname" /> <input type="submit" value="Search" />
        </form>
        <div class="results">
            <div class="result"></div>
        </div>
    </div>
    <table id="resultstable">
        <thead>
            <tr>
                <th>Vehicle ID</th>
                <th>Vehicle</th>
                <th>Number of passengers</th>
                <th>Date available</th>
                <th>Price</th>
                <th>Driving license required</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $vehicle): ?>
            <tr>
                <td><?=$vehicle->vehicle_id?></td>
                <td><?=$vehicle->vehicle_make?></td>
                <td><?=$vehicle->number_of_passengers?></td>
                <td><?=$vehicle->date_available?></td>
                <td>£<?=$vehicle->price?></td>
                <td><?=$vehicle->driving_license_required?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </form>
</body>

</html>