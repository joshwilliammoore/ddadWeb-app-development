<?php
class vehicle

	{
	private $id;
	private $givenName;
	private $familyName;
	function __get($id)
		{
		return $this->$id;
		}
    }
?>