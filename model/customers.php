<?php
class customers
{
    private $second_name;
    private $first_name;
    private $address;
    private $email_address;
    private $contact_number;

    function __get($name){
        return $this->$name;
    }

    function __set($name, $value){
        $this -> $name = $value;
    }
}

?>