<?php
class promotion
{
    private $prom_id;
    private $vehicleID;
    private $discount;
    private $endDate;
    
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