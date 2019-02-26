<?php
require_once "../view/admintools_view.php";
require_once "../model/dataAccess.php";
require_once "../model/vehicle.php";
if (!isset($_REQUEST["passengerAmmount"]))
{
    $results = getAllVehicles();
}
else
{
    $passengerAmmount = $_REQUEST["passengerAmmount"];
    $price = $_REQUEST["price"];
    $date_available = $_REQUEST["Date"];
    $license = $_REQUEST["license"];
    $model = $_REQUEST["model"];
    $results = addNewVehicle($passengerAmmount, $model, $date_available, $price, $license);
}
?>