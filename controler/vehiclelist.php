<?php
require_once "../model/vehicle.php";
require_once "../view/vehiclelist_view.php";
require_once "../model/dataAccess.php";
if (!isset($_REQUEST["searchname"]) && !isset($_REQUEST["price"]) && !isset($_REQUEST["vehicleID"]) && !isset($_REQUEST["vehicleModel"]) && !isset($_REQUEST["numberOfPassengers"]) && !isset($_REQUEST["dateAvailable"]) && !isset($_REQUEST["license"]))
{
    $results = getAllVehicles();
}
else if (isset($_REQUEST["searchname"]))
{
    $search = $_REQUEST["searchname"];
    $results = getVehiclesBySearch($search);
}
else if (isset($_REQUEST["vehicleID"]))
{
    $results = getAllVehiclesByVehicleID();
}
else if (isset($_REQUEST["price"]))
{
    $results = getAllVehiclesByPrice();
}
else if (isset($_REQUEST["vehicleModel"]))
{
    $results = getAllVehiclesByVehicleModel();
}
else if (isset($_REQUEST["numberOfPassengers"]))
{
    $results = getAllVehiclesByNumberOfPassengers();
}
else if (isset($_REQUEST["dateAvailable"]))
{
    $results = getAllVehiclesByDateAvailable();
}
else if (isset($_REQUEST["license"]))
{
    $results = getAllVehiclesByLicense();
}
?>