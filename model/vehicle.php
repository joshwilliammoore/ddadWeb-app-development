<?php
class vehicle
{
	private $id;
	private $vehicle_model;
	private $number_of_passengers;
	private $date_available;
	private $price;
	private $driving_license_required;

	function __get($vehicle)
	{
		return $this->$vehicle;
	}

	function __set($vehicle,$value)
	{
		$this->$vehicle = $value;
	}

	function __get($number_of_passengers)
	{
		return $this->$number_of_passengers;
	}

	function __set($number_of_passengers,$value)
	{
		$this->$number_of_passengers = $value;
	}

	function __get($date_available)
	{
		return $this->$date_available;
	}

	function __set($date_available,$value)
	{
		$this->$date_available = $value;
	}

	function __get($price)
	{
		return $this->$price;
	}

	function __set($price,$value)
	{
		$this->$price = $value;
	}

	function __get($driving_license_required)
	{
		return $this->$driving_license_required;
	}

	function __set($driving_license_required,$value)
	{
		$this->$driving_license_required = $value;
	}
}
?>