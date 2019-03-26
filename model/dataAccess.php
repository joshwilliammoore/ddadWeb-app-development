<?php
$pdo = new PDO("mysql:host=kunet;dbname=db_k1745856", "k1745856", "Badpassword", 
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

session_start();

function getAllVehiclesByPrice(){
	global $pdo;
	if (empty($_SESSION["orderPrice"]))
	{
		$_SESSION["orderPrice"]="ASC";
	}

	if ($_SESSION["orderPrice"] == "ASC")
	{
		$_SESSION["orderPrice"] = "DESC";
	}
	else
	{
		$_SESSION["orderPrice"] = "ASC";
	}

	$statement = $pdo->prepare("SELECT * FROM `vehicles` ORDER BY `vehicles`.`price`".$_SESSION["orderPrice"]);
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getAllVehiclesByVehicleID(){
	global $pdo;
	if (empty($_SESSION["orderID"]))
	{
		$_SESSION["orderID"]="ASC";
	}

	if ($_SESSION["orderID"] == "ASC")
	{
		$_SESSION["orderID"] = "DESC";
	}
	else
	{
		$_SESSION["orderID"] = "ASC";
	}

	$statement = $pdo->prepare("SELECT * FROM `vehicles` ORDER BY `vehicles`.`vehicle_id`".$_SESSION["orderID"]);
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getAllVehiclesByVehicleModel(){
	global $pdo;
	if (empty($_SESSION["orderMake"]))
	{
		$_SESSION["orderMake"]="ASC";
	}

	if ($_SESSION["orderMake"] == "ASC")
	{
		$_SESSION["orderMake"] = "DESC";
	}
	else
	{
		$_SESSION["orderMake"] = "ASC";
	}

	$statement = $pdo->prepare("SELECT * FROM `vehicles` ORDER BY `vehicles`.`vehicle_make`".$_SESSION["orderMake"]."");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getAllVehiclesByNumberOfPassengers(){
	global $pdo;
	if (empty($_SESSION["orderPassenger"]))
	{
		$_SESSION["orderPassenger"]="ASC";
	}

	if ($_SESSION["orderPassenger"] == "ASC")
	{
		$_SESSION["orderPassenger"] = "DESC";
	}
	else
	{
		$_SESSION["orderPassenger"] = "ASC";
	}

	$statement = $pdo->prepare("SELECT * FROM `vehicles` ORDER BY `vehicles`.`number_of_passengers`".$_SESSION["orderPassenger"]."");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getAllVehiclesByDateAvailable(){
	global $pdo;
	if (empty($_SESSION["orderDate"]))
	{
		$_SESSION["orderDate"]="ASC";
	}

	if ($_SESSION["orderDate"] == "ASC")
	{
		$_SESSION["orderDate"] = "DESC";
	}
	else
	{
		$_SESSION["orderDate"] = "ASC";
	}

	$statement = $pdo->prepare("SELECT * FROM `vehicles` ORDER BY `vehicles`.`date_available`".$_SESSION["orderDate"]."");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getAllVehiclesByLicense(){
	global $pdo;
	if (empty($_SESSION["orderLicense"]))
	{
		$_SESSION["orderLicense"]="ASC";
	}

	if ($_SESSION["orderLicense"] == "ASC")
	{
		$_SESSION["orderLicense"] = "DESC";
	}
	else
	{
		$_SESSION["orderLicense"] = "ASC";
	}

	$statement = $pdo->prepare("SELECT * FROM `vehicles` ORDER BY `vehicles`.`driving_license_required`".$_SESSION["orderLicense"]."");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function addVehicleToBasket($id){
	global $pdo;
	if (empty($_SESSION["basket"]))
	{
		$_SESSION["basket"]=array();
	}
	
	array_push($_SESSION["basket"], $id);

	return $_SESSION["basket"];
}

function removeVehicleFromBasket($id){
	global $pdo;

	$pos = array_search($id, $_SESSION["basket"]);

	unset($_SESSION["basket"][$pos]);

	return $_SESSION["basket"];
}

function getAllVehicles()
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getTotalPriceBasket($id)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT SUM(price) from vehicles WHERE vehicle_id IN ($id)");
	$statement->execute([$id]);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getAllVehiclesByID($id)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles WHERE vehicle_id IN ($id)");
	$statement->execute([$id]);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}
function getAllpromotional()
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM promotional");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "promotion");
	return $results;
}
function addPromotion($prom_id, $vehicleMake, $discount, $endDate)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO promotional (prom_id, vehicleMake, discount, endDate) VALUES ($prom_id, $vehicleMake, $discount, $endDate)");
	$statement ->execute([$prom_id, $vehicleMake, $discount, $endDate]);
}
function completeBooking($id, $requiredDate, $destination, $numberOfPassengers)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO bookings (vehicles_required, date_required, destination, number_of_passengers, customer_id) VALUES ('$id', '$requiredDate', '$destination', '$numberOfPassengers', '1')");
	$statement->execute([$id, $requiredDate, $destination, $numberOfPassengers]);
}

function getNewVehicles()
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles ORDER BY vehicles.vehicle_date DESC LIMIT 5");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}


function getVehiclesBySearch($vehicle)
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
 	$statement = $pdo->prepare("UPDATE vehicles SET number_of_passengers=$number_of_passengers, vehicle_make='$model', date_available='$date_available', price=$price, driving_license_required='$license' WHERE vehicle_id = $id");
 	$statement ->execute([$vehicle_id, $number_of_passengers, $model, $date_available, $price, $license]);
}

function removeVehicle($id)
{
	global $pdo;
	$statement = $pdo->prepare("DELETE FROM vehicles WHERE vehicle_id IN ($id)");
 	$statement ->execute([$id]);
}

function deleteVehicle($id)
{
	global $pdo;
	$statement = $pdo->prepare("DELETE FROM vehicles WHERE vehicle_id = $id");
 	$statement ->execute([$id]);
}

function getVehiclesByStartOfVehicle($partialSearch)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT DISTINCT vehicle_make FROM vehicles
                              WHERE vehicle_make like ?');
  $statement->execute(["$partialSearch%"]);
  $users = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
  return $users;
}
 
function users(){

}
/*
function userLogin($username, $password){
	global $pdo;
	$statement = $pdo->prepare("SELECT username FROM customers LIKE '%{$username}%' AND SELECT paSsword FROM customers LIKE '%{$password}%'");
	$statement = $pdo->execute([$username, $password]);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "customers");
	return results;
}
*/
function addCustomer($fist_name, $second_name, $address, $email_address, $contact_number)
{
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO customers (customer_lastname, customer_firstname, customer_address, email_address, contact_number) VALUES ($second_name, $first_name, $address, $email_address, $contact_number)");
	$statement ->execute([$second_name, $first_name, $address, $email_address, $contact_number]);
}

/*function getMPV()
{
	global $pdo;
	$statement = $pdo->("SELECT * FROM vehicle_model WHERE vehicle_model REGEXP 'MPV'");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}*/

function getUsernameAndPassword($username,$pssword)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT customer_lastname,customer_firstname,customer_address,email_address,contact_number FROM customers
								WHERE username = ? AND password = ?");
	$statement->execute([$username,$pssword]);
	$result = $statement->fetchAll(PDO::FETCH_CLASS, 'customers');

	if(count($result)!=0)
	{
		return $result[0];
	}
	else
	{
		return false;
	}
}

	function getAdminUsernameAndPassword($username,$pssword)
	{
		global $pdo;
		$statement = $pdo->prepare("SELECT first_name,last_name,address,home_telephone,DoB,salary FROM employees
									WHERE username = ? AND password = ?");
		$statement->execute([$username,$pssword]);
		$result = $statement->fetchAll(PDO::FETCH_CLASS, 'employee');
	
		if(count($result)!=0)
		{
			return $result[0];
		}
		else
		{
			return false;
		}
	}

?>