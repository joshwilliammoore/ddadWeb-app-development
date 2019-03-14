<?php
require_once "../model/dataAccess.php";
require_once "../controler/admintools.php";
?>
<!doctype html>
<html>

<head>
    <title>Admin tools</title>
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
<div class="title">
    <h1>Admin tools</h1>
</div>
<div class="title">
    <h2>Vehicles manipulations</h2>
</div>
<h2>Adding/editing/deleting a vehicle</h2>
<p>Only type in an ID if you are editing a vehicle</p>

<body>
    <form method="post" action="admintools_view.php">
        Enter the id of the record you would like to edit:
        <input name="idRecord" required>
        <br>
        Amount of passengers:
        <input name="passengerAmmount" required />
        <br>
        Model:
        <input name="model" required />
        <br>
        Date:
        <input name="Date" type="date" required />
        <br>
        Price:
        <input name="price" required />
        <br>
        License:
        <select name="license">
            <option value="Passenger Carrying Vehicle (PCV)">Passenger Carrying Vehicle (PCV)</option>
            <option value="Driver Certificate of Professional Competence (Driver CPC)">Driver Certificate of
                Professional Competence (Driver CPC)</option>
        </select>
        <br>
        <input type="submit" name="addVehicle" value="Add vehicle" />
        <input type="submit" name="editVehicle" value="Edit record" />
        <input type="submit" name="deleteVehicle" value="Delete record" />
    </form>
    <div>
        <div class="title">
            <h2>Promotional features</h2>
        </div>
        <p>Here you can create promotional materials</p>
        <form method="post" action="admintools_view.php">
            Enter ID of vehicle:
            <input name="idVehicle">
            <br>
            Enter discount amount:
            <input name="discountAmount">
            <br>
            Enter end date:
            <input name="endDate" type="date">
            <br>
            <input type="submit" name="addPromotion" value="Add promotion">
        </form>
    </div>
</body>

</html>