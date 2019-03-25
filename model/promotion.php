<?php
class promotion
{
    private $prom_id;
    private $vehicleID;
    private $discount;
    private $endDate;
    
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