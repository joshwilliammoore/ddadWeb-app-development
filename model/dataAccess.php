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
	$statement = $pdo->prepare("SELECT * FROM vehicles WHERE driving_license_required LIKE '%{$vehicle}%' OR vehicle_id LIKE '%{$vehicle}%' OR number_of_passengers LIKE '%{$vehicle}%' OR price LIKE '%{$vehicle}%' OR date_available LIKE '%{$vehicle}%' OR vehicle_make LIKE '%{$vehicle}%'");
	$statement->execute([$vehicle]);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
   }

function addNewVehicle($number_of_passengers, $model, $date_available, $price, $license)
 {
 	global $pdo;
 	$statement = $pdo->prepare("INSERT INTO vehicles (number_of_passengers, vehicle_make, date_available, price, driving_license_required) VALUES ($number_of_passengers, '$model', '$date_available', $price, '$license')");
 	$statement ->execute([$number_of_passengers, $model, $date_available, $price, $license]);
 }

function editVehicle($id, $number_of_passengers, $model, $date_available, $price, $license)
{
	global $pdo;
 	$statement = $pdo->prepare("UPDATE vehicles SET number_of_passengers=$number_of_passengers, vehicle_make='$model', date_available='$date_available', price=$price, driving_license_required='$license' WHERE id = $id");
 	$statement ->execute([$vehicle_id, $number_of_passengers, $model, $date_available, $price, $license]);
}

function deleteVehicle($id)
{
	global $pdo;
	$statement = $pdo->prepare("DELETE FROM vehicles WHERE id = $id");
 	$statement ->execute([$id]);
}

function getUsersByStartOfSurname($partialSurname)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT DISTINCT surname FROM customers
                              WHERE surname like ?');
  $statement->execute(["$partialSurname%"]);
  $users = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
  return $users;
}
 
function users(){

}
/*
function userLogin($username, $password){
	global $pdo;
	$statement = $pdo->prepare("SELECT username FROM customer_login LIKE '%{$username}%'");
	$statement = $pdo->execute([$username, $password]);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "customer_login");
	return results;
}
*/
function addCustomer($fist_name, $second_name, $address, $email_address, $contact_number)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO customers (customer_lastname, customer_firstname, customer_address, email_address, contact_number) VALUES ($second_name, $first_name, $address, $email_address, $contact_number)");
	$statement ->execute([$second_name, $first_name, $address, $email_address, $contact_number]);
}
?>