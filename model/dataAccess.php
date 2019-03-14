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

function getAllVehiclesprice()
	{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles ORDER BY vehicles.price ASC");
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
	}

function getVehiclesByAll($vehicle)
	{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles WHERE driving_license_required LIKE '%{$vehicle}%' OR vehicle_id LIKE '%{$vehicle}%' OR number_of_passengers >= '{$vehicle}' OR price <= '{$vehicle}' OR date_available LIKE '%{$vehicle}%' OR vehicle_make LIKE '%{$vehicle}%'");
	$statement->execute([$vehicle]);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
   }

function getVehiclesByVehicle($vehicle)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles WHERE vehicle_make LIKE '%{$vehicle}%'");
	$statement->execute($vehicle);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getVehiclesByPassengers($vehicle)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles WHERE number_of_passengers >= '{$vehicle}'");
	$statement->execute($vehicle);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getVehiclesByDate($vehicle)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles WHERE date_available <= '{$vehicle}'");
	$statement->execute($vehicle);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getVehiclesByPrice($vehicle)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles WHERE price <= '{$vehicle}' ORDER BY price ASC");
	$statement->execute($vehicle);
	$results = $statement->fetchAll(PDO::FETCH_CLASS, "vehicle");
	return $results;
}

function getVehiclesByLicense($vehicle)
{
	global $pdo;
	$statement = $pdo->prepare("SELECT * FROM vehicles WHERE driving_license_required LIKE '%{$vehicle}%'");
	$statement->execute($vehicle);
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
  $statement = $pdo->prepare('SELECT DISTINCT vehicle_make FROM vehicles
                              WHERE vehicle_make like ?');
  $statement->execute(["$partialSurname%"]);
  $users = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
  return $users;
}

function addPromotion($vehicleID, $discountAmount, $endDate){
	global $pdo;
	$statement = $pdo -> prepare ("INSERT INTO promotional (vehicleID, discount, endDate) VALUES ('$vehicleID', '$discountAmount', '$endDate')");
	$statement ->execute([$vehicleID, $discountAmount, $endDate]);
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