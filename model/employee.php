<?php
class employee
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
}
	
?>