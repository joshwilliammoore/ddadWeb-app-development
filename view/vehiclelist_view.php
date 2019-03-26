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
    <link href="../CSS/vehicles.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../AJAX/clientcode-anon.js"></script>
</head>

<div class="topnav">
    <a class="active" href="index.php" alt="Index link">Home</a>
    <a href="vehiclelist_view.php" alt="Vehicle list link">Vehicle List</a>
    <a href="admintools_view.php" alt="Admin tools link">Admin Tools</a>
    <a href="signup.php" alt="Sign up link">Sign up</a>
    <a href="basket_view.php" alt="Basket link">Basket</a>
    <div class="login-container">
    </div>
</div>



<div class="title">
    <h1>Vehicle List</h1>
</div>

<body>
    <div id="searchfield">
        <form action="vehiclelist_view.php" method="get">
            <input type="text" name="searchname" /> <input type="submit" value="Search" alt="Search for vehicle" />
        </form>
        <div class="results">
            <div class="result"></div>
        </div>
    </div>
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

    <form action="vehiclelist_view.php">
        The IDs of vehicles: <input type="text" name="vehiclesID" alt="IDs of vehicles">
        <br>
        <input type="submit" name="addToBasket" value="Add to basket" alt="Add to basket">
    </form>

    

   


</body>

</html>