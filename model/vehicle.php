<?php
class vehicle

	{
	private $id;
	private $familyName;
	function __get($id)
		{
		return $this->$id;
		}
    }
?>