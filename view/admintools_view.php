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
  <a class="active" href="index.php">Home</a>
  <a href="vehiclelist_view.php">Vehicle List</a>
  <a href="admintools_view.php">Admin Tools</a>
  <a href="signup.php">Sign up</a>
  <div class="login-container">
    <form action="login.php">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>
</div>
<div class="title">
    <h1>Admin tools</h1>
</div>
<h2>Adding/editing/deleting a vehicle</h2>
<p>Only type in an ID if you are editing a vehicle</p>

<body>
    <form method="post" action="admintools_view.php">
        Enter the id of the record you would like to edit:
        <input name="idRecord">
        <br>
        Amount of passengers:
        <input name="passengerAmmount" />
        <br>
        Model:
        <input name="model" />
        <br>
        Date:
        <input name="Date" type="date" />
        <br>
        Price:
        <input name="price" />
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
</body>

</html>