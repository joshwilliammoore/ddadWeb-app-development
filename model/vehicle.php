<?php
class vehicle
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
?>