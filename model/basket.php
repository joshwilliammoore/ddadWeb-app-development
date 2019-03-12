<?php
class Basket
{
	private $id;

    function __get($id)
	{
		return $this->$id;
	}

	function __set($id,$value)
	{
		$this->$id = $value;
	}
}