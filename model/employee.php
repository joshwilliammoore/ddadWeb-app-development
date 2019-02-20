<?php
class Employees
{
    private $id;
    private $first_name;
    private $last_name;
    private $address;
    private $home_telephone;
    private $DoB;
    private $gender;
    private $job_description;
    private $salary;

    function __get($id)
	{
		return $this->$id;
	}

	function __set($id,$value)
	{
		$this->$id = $value;
    }
    
    function __get($first_name)
	{
		return $this->$first_name;
	}

	function __set($first_name,$value)
	{
		$this->$first_name = $value;
    }
    
    function __get($last_name)
	{
		return $this->$last_name;
	}

	function __set($last_name,$value)
	{
		$this->$last_name = $value;
    }
    
    function __get($address)
	{
		return $this->$address;
	}

	function __set($address,$value)
	{
		$this->$address = $value;
    }
    
    function __get($home_telephone)
	{
		return $this->$home_telephone;
	}

	function __set($home_telephone,$value)
	{
		$this->$home_telephone = $value;
    }
    
    function __get($DoB)
	{
		return $this->$DoB;
	}

	function __set($DoB,$value)
	{
		$this->$DoB = $value;
    }

    function __get($gender)
	{
		return $this->$gender;
	}

	function __set($gender,$value)
	{
		$this->$gender = $value;
    }
    
    function __get($job_description)
	{
		return $this->$job_description;
	}

	function __set($job_description,$value)
	{
		$this->$job_description = $value;
    }
    
    function __get($salary)
	{
		return $this->$salary;
	}

	function __set($salary,$value)
	{
		$this->$salary = $value;
	}
}
?>