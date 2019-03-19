<?php
require_once "../view/admintools_view.php";
require_once "../model/dataAccess.php";
require_once "../model/vehicle.php";
if (isset($_POST["addVehicle"])) {
    if (!isset($_REQUEST["passengerAmmount"])) {
        $results = getAllVehicles();
    } else {
        $passengerAmmount = $_REQUEST["passengerAmmount"];
        $price = $_REQUEST["price"];
        $date_available = $_REQUEST["Date"];
        $license = $_REQUEST["license"];
        $model = $_REQUEST["model"];
        $results = addNewVehicle($passengerAmmount, $model, $date_available, $price, $license);
    }
}
else if (isset($_POST["editVehicle"])){
    if (isset($_REQUEST["idRecord"]))
{
    $id = $_REQUEST["idRecord"];
    $passengerAmmount = $_REQUEST["passengerAmmount"];
    $price = $_REQUEST["price"];
    $date_available = $_REQUEST["Date"];
    $license = $_REQUEST["license"];
    $model = $_REQUEST["model"];
    $results = editVehicle($id, $passengerAmmount, $model, $date_available, $price, $license);
}
}
else if (isset($_POST["deleteVehicle"])){
    $id = $_REQUEST["idRecord"];
    $results = deleteVehicle($id);
}
else if (isset($_POST["addPromotion"])){
    $id = $_REQUEST["idVehicle"];
    $discount = $_REQUEST["discountAmount"];
    $date = $_REQUEST["endDate"];
    $results = addPromotion($id, $discount, $date);
}
?>