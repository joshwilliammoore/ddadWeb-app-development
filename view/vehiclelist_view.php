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
    <link href="../CSS/search.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="clientcode-anon.js"></script>
</head>
<ul class="nav">
    <li><a href="index.php">HOME</a></li>
    <li><a href="vehiclelist_view.php">VEHICLE LIST</a></li>
    <li><a href="login.php">LOGIN</a></li>
    <li><a href="signup.php">SIGNUP</a></li>
    <li><a href="admintools_view.php">ADMIN TOOLS</a></li>
</ul>
<div class="title">
    <h1>Vehicle List</h1>
</div>

<body>
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