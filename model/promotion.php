<?php
class promotion
{
    private $prom_id;
    private $vehicleMake;
    private $discount;
    private $endDate;
    
    function __get($prom_id)
    {
        return $this->$prom_id;
    }

    function __set($prom_id,$value)
    {
        $this->$prom_id = $value;
    }

}
?>