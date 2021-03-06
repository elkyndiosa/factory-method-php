<?php

require_once "Factory.php";
require_once "ITransport.php";

class Auto implements Transport
{
    public function __toString(){
        return "Assembling cars".chr(10);
    }
    public static function getColor(){
        return "Red".chr(10);
    }
}