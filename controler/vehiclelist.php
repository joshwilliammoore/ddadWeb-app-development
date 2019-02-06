<?php
require_once "../model/vehicle.php";
require_once "../view/vehiclelist_view.php";
require_once "../model/dataAccess.php";
if (!isset($_REQUEST["search"]))
{
    $results = getAllVehicles();
}
else
{
    $search = $_REQUEST["search"];
    $results = getVehiclesByPassengers($search);
}
?>