<?php
$pdo = new PDO("mysql:host=kunet;dbname=db_k1745856", "k1745856", "Badpassword", 
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

session_start();



function getAllVehicles()
	{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
	}

function getAllVehiclesPrice()
	{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles ORDER BY vehicles.price ASC");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
	}

function getVehiclesByPassengers($vehicle)
	{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles WHERE driving_license_required LIKE '%{$vehicle}%' OR id LIKE '%{$vehicle}%' OR number_of_passengers LIKE '%{$vehicle}%' OR price LIKE '%{$vehicle}%' OR date_available LIKE '%{$vehicle}%'");
	$statement->execute([$vehicle]);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
   }
function users(){

}
?>