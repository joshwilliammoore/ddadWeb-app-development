<?php
class vehicle
{
	private $vehicle_id;
	private $vehicle_type;
	private $vehicle_model;
	private $number_of_passengers;
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