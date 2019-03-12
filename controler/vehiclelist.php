<?php
require_once "../model/vehicle.php";
require_once "../view/vehiclelist_view.php";
require_once "../model/dataAccess.php";
if (!isset($_REQUEST["searchname"]))
{
    $results = getAllVehicles();
}
elseif($_POST['value']== 'vehicle')
{
    $search = $_REQUEST["searchname"];
    $results = getVehiclesByVehicles($search);
}
elseif($_POST['value']== 'passengers_no')
{
    $search = $_REQUEST["searchname"];
    $results = getVehiclesByPassengers($search);
}
elseif($_POST['value']== 'date')
{
    $search = $_REQUEST["searchname"];
    $results = getVehiclesByDate($search);
}
elseif($_POST['value']== 'price')
{
    $search = $_REQUEST["searchname"];
    $results = getVehiclesByPrice($search);
}
elseif($_POST['value']== 'license')
{
    $search = $_REQUEST["searchname"];
    $results = getVehiclesByLicense($search);
}
?>