<?php
 class Customers
 {
     private $id;
     private $last_name;
     private $first_name;
     private $customer_address;
     private $email_address;
     private $contact_number;
     private $username;
     private $password;
 
     function __get($id)
 	{
 		return $this->$id;
 	}
 
 	function __set($id,$value)
 	{
 		$this->$id = $value;
     }
     
     function __get($last_name)
 	{
 		return $this->$last_name;
 	}
 
 	function __set($last_name,$value)
 	{
 		$this->$last_name = $value;
     }
 
     function __get($first_name)
 	{
 		return $this->$first_name;
 	}
 
 	function __set($first_name,$value)
 	{
 		$this->$first_name = $value;
     }
     
     function __get($customer_address)
 	{
 		return $this->$customer_address;
 	}
 
 	function __set($customer_address,$value)
 	{
 		$this->$customer_address = $value;
     }
 
     function __get($email_address)
 	{
 		return $this->$email_address;
 	}
 
 	function __set($email_address,$value)
 	{
 		$this->$email_address = $value;
     }
     
     function __get($contact_number)
 	{
 		return $this->$contact_number;
 	}
 
 	function __set($contact_number,$value)
 	{
 		$this->$contact_number = $value;
     }
     
     function __get($username)
 	{
 		return $this->$username;
 	}
 
 	function __set($username,$value)
 	{
 		$this->$username = $value;
     }
 
     function __get($password)
 	{
 		return $this->$password;
 	}
 
 	function __set($password,$value)
 	{
 		$this->$password = $value;
     }
 }
 ?>