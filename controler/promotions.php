<?php
require_once "../model/promotion.php";
require_once "../view/promotion_view.php";
require_once "../model/dataAccess.php";
if (!isset($_REQUEST["prom_id"]) && !isset($_REQUEST["vehicleID"]) && !isset($_REQUEST["discount"]) && !isset($_REQUEST["endDate"]) && !isset($_REQUEST["addToBasket"]))
{
    $results = getAllpromotional();
}
else if (isset($_REQUEST["prom_id"]))
{
    $search = $_REQUEST["prom_id"];
    $results = getPromotionsbyProm_id($prom_id);
}
else if (isset($_REQUEST["vehicleID"]))
{
    $results = getAllPromotionsByVehicleID();
}
else if (isset($_REQUEST["discount"]))
{
    $results = getAllPromotionsByDiscount();
}
else if (isset($_REQUEST["endDate"]))
{
    $results = getAllPromotionsByEndDate();
}
else if (isset($_REQUEST["addToBasket"]))
{
    $id = $_REQUEST["prom_id"];
    $array = addPromotionToBasket($id);
    $results = getAllPromotions();
}
?>