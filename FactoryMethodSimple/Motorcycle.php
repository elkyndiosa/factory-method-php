<?php

require_once "Factory.php";
require_once "ITransport.php";

class Motorcycle implements Transport
{
    public function __toString(){
        return "Assembling Motorcycle".chr(10);
    }
    public static function getColor(){
        return "blue".chr(10);
    }
}