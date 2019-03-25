<?php
require_once "links.html";
require_once "../model/vehicle.php";
require_once "../controler/basket.php";
require_once "../model/dataAccess.php";
?>
<!doctype html>
<html>

<head>
    <title>Basket</title>
    <link href="../CSS/table.css" rel="stylesheet" type="text/css">
    <link href="../CSS/main.css" rel="stylesheet" type="text/css">
</head>

<div id="includedContent"></div>
<div class="title">
    <h1>Basket</h1>
</div>

<body>

    <form action="basket_view.php" method="post">
        Remove a vehicle by ID: <input type="text" name="basketVehicleID">
        <input type="submit" value="remove booking" name="removeVehicleFromBasket">
    </form>

    <table id="resultstable" ALIGN=left>
        <thead>
            <tr>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="vehicleID" value="ID" class="btn" alt="Order by vehicle ID" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="vehicleModel" value="Model" class="btn"
                            alt="Order by vehicle model" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="numberOfPassengers" value="number of passengers" class="btn"
                            alt="Order by number of passenger" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="dateAvailable" value="date available" class="btn"
                            alt="Order by date available" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="price" value="price" class="btn" alt="Order by price" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="license" value="Driving license required" class="btn"
                            alt="Order by price" />
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
    <br>
    <form action="basket_view.php" method="post">
        Date required:<input type="date" name="requiredDate" required alt="Required date">
        <br>
        Destination:<input type="text" name="destination" required alt="Destination">
        <br>
        Number of passengers:<input type="text" name="numberOfPassengers" required alt="Ammount of passenger">
        <br>
        <input type="submit" value="complete booking" name="completeBooking" required alt="Complete booking">
    </form>

</body>

</html>