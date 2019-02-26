<?php
class vehicle
<<<<<<< HEAD
{
	private $id;
	private $vehicle_model;
	private $number_of_passengers;
	private $date_available;
	private $price;
	private $driving_license_required;

	function __get($name)
	{
		return $this->$name;
	}

	function __set($name,$value)
	{
		$this->$name = $value;
	}

}
=======

	{
	private $id;
	private $familyName;
	function __get($id)
		{
		return $this->$id;
		}
    }
>>>>>>> 6a613d914682c9b28eb5c1b56b1247a8a0c8af9e
?>