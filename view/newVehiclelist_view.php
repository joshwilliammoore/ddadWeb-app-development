<?php
require_once "../controler/newVehicleList.php";
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
  
   <div class = "title">
         <h1>Latest Vehicles</h1>
   </div>
   <body>
   
<form method="post" action="newVehiclelist_view.php">
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
        <select name="field">
            <option value="vehicle">Vehicle</option>
            <option value="passengers_no">Number of Passengers</option>
            <option value="date">Required Date</option>
            <option value="price">Price</option>
            <option value="license">License Required</option>
        </select>
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
                <th></th>
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
                <td><input type="submit" value="Add to Basket" /></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </form>
</body>

</html>