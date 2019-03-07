<?php
header('Content-Type: application/json');
require_once ("../model/vehicle.php");
require_once ("../model/dataAccess.php");

if (!isset($_REQUEST["surname"]))
{
  echo json_encode([]);
}
else {
  $names = getUsersByStartOfSurname($_REQUEST["surname"]);
  echo json_encode($names);
}
?>
