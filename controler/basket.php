<?php
require_once "../model/vehicle.php";
require_once "../view/basket_view.php";
require_once "../model/dataAccess.php";
$array1 = array();
$array1 = $_SESSION["basket"];
$ids = implode( ", ", $array1 );
//$total = getTotalPriceBasket($ids);
    if (!isset($_REQUEST["removeVehicleFromBasket"]) && !isset($_REQUEST["completeBooking"])) {
        $results = getAllVehiclesByID($ids);
    } elseif (isset($_REQUEST["removeVehicleFromBasket"])) {
        $id = $_REQUEST["basketVehicleID"];
        removeVehicleFromBasket($id);
        $results = getAllVehiclesByID($ids);
    } elseif (isset($_REQUEST["completeBooking"])) {
        $id = $ids;
        $requiredDate = $_REQUEST["requiredDate"];
        $destination = $_REQUEST["destination"];
        $numberOfPassengers = $_REQUEST["numberOfPassengers"];
        completeBooking($id, $requiredDate, $destination, $numberOfPassengers);
        removeVehicle($ids);
        $_SESSION["basket"]=array();
        $ids = "";
    }
?>