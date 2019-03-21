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
    <a class="active" href="index.php">Home</a>
    <a href="vehiclelist_view.php">Vehicle List</a>
    <a href="admintools_view.php">Admin Tools</a>
    <a href="signup.php">Sign up</a>
    <a href="basket_view.php">Basket</a>
    <div class="login-container">
    </div>
</div>



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
    <table id="resultstable" ALIGN=left>
        <thead>
            <tr>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="vehicleID" value="ID" class="btn" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="vehicleModel" value="Model" class="btn" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="numberOfPassengers" value="number of passengers" class="btn" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="dateAvailable" value="date available" class="btn" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="price" value="price" class="btn" />
                    </form>
                </th>
                <th>
                    <form action="vehiclelist_view.php" method="get">
                        <input type="submit" name="license" value="Driving license required" class="btn" />
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
        The IDs of vehicles: <input type="text" name="vehiclesID">
        <br>       
        <input type="submit" name="addToBasket" value="Add to basket">
    </form>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="car_image1.jpg">
            <img src="../view/images/car_image1.jpg" alt="car1" width="600" height="400">
            </a>
            <div class="desc">SEAT The Alhambra<br/>Standard MPV<br/> 
            <input type="submit" name="addToBasket" value="Add to basket"></div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="bus_image1.jpg">
            <img src="../view/images/bus_image1.jpg" alt="car1" width="600" height="400">
            </a>
            <div class="desc">Mercedes Sprinter<br/>VIP Coach<br/> 
            <input type="submit" name="addToBasket" value="Add to basket"></div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="bus_image2.jpg">
            <img src="../view/images/bus_image2.jpg" alt="car1" width="600" height="400">
            </a>
            <div class="desc">Mercedes Sprinter<br/>VIP Coach<br/> 
            <input type="submit" name="addToBasket" value="Add to basket"></div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="bus_image1.jpg">
            <img src="../view/images/bus_image1.jpg" alt="car1" width="600" height="400">
            </a>
            <div class="desc">Mercedes Sprinter<br/>VIP Coach<br/> 
            <input type="submit" name="addToBasket" value="Add to basket"></div>
        </div>
    </div>

    <div class="clearfix"></div>

    
</body>

</html>