<?php
require_once "Factory.php";
require_once "Auto.php";
require_once "Motorcycle.php";

$craete = Factory::create('Motorcycle');

echo $craete.' '.$craete->getColor();