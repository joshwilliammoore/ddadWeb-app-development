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
    <script type="text/javascript" src="../AJAX/clientcode-anon.js"></script>
</head>
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
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="vehicleID" value="ID" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="vehicleModel" value="Model" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="numberOfPassengers" value="numberOfPassengers" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="dateAvailable" value="date available" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="price" value="price" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="license" value="Driving license required" />
                    </form>
                </th>
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