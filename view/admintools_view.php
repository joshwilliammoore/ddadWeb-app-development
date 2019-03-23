<?php
require_once "../model/dataAccess.php";
require_once "../controler/admintools.php";

if(!isset($_SESSION)) session_start();
   
if(!isset($_SESSION["adminLoggedIn"]))
{
   header("location: ../controler/logincontroller.php");
   exit();
}
?>
<!doctype html>
<html>

<head>
    <title>Admin tools</title>
    <link href="../CSS/table.css" rel="stylesheet" type="text/css">
    <link href="../CSS/main.css" rel="stylesheet" type="text/css">
</head>
<div class="topnav">
  <a class="active" href="index.php" alt="Index link">Home</a>
  <a href="vehiclelist_view.php" alt="Vehicle list link">Vehicle List</a>
  <a href="admintools_view.php" alt="Admin tools link">Admin Tools</a>
  <a href="signup.php" alt="Sign up link">Sign up</a>
  <a href="basket_view.php" alt="Basket link">Basket</a>
  <div class="login-container">
    <form action="login.php">
      <input type="text" placeholder="Username" name="username" alt="Username field">
      <input type="text" placeholder="Password" name="psw" alt="Password fiel">
      <button type="submit" alt="Log in button">Login</button>
    </form>
  </div>
</div>
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
        <input name="idRecord" required alt="Vehicle ID">
        <br>
        Amount of passengers:
        <input name="passengerAmmount" required alt="Ammount of passenger"/>
        <br>
        Model:
        <input name="model" required alt="Vehicle model"/>
        <br>
        Date:
        <input name="Date" type="date" required alt="Vehicle date"/>
        <br>
        Price:
        <input name="price" required alt="Vehicle price"/>
        <br>
        License:
        <select name="license" alt="Vehicle license">
            <option value="Passenger Carrying Vehicle (PCV)" alt="Passenger Carrying Vehicle">Passenger Carrying Vehicle (PCV)</option>
            <option value="Driver Certificate of Professional Competence (Driver CPC)" alt="Driver Certificate of Professional Competence">Driver Certificate of
                Professional Competence (Driver CPC)</option>
        </select>
        <br>
        <input type="submit" name="addVehicle" value="Add vehicle" alt="Add vehicle button"/>
        <input type="submit" name="editVehicle" value="Edit record" alt="Edit vehicle button"/>
        <input type="submit" name="deleteVehicle" value="Delete record" alt="Delete vehicle button"/>
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