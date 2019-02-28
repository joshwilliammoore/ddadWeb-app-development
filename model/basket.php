<?php
class Basket
{
    private number;

    function __get($id)
	{
		return $this->$id;
	}

	function __set($id,$value)
	{
		$this->$id = $value;
	}
}