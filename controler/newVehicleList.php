<?php
require_once "../model/vehicle.php";
require_once "../view/newVehiclelist_view.php";
require_once "../view/vehiclelist_view.php";
require_once "../model/dataAccess.php";
if (!isset($_REQUEST["searchname"]))
{
    $results = getNewVehicles();
}
else
{
    $search = $_REQUEST["searchname"];
    $results = getVehiclesByAll($search);
}

?>