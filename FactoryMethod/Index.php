<?php
require_once "CarFactory.php";
require_once "CarFamily.php";
require_once "CarSport.php";
require_once "CarSedan.php";
require_once "CarOrder.php";

$CarOrder = new CarOrder();

$CarOrder->order('CarSedan');

echo $CarOrder->getCarOrders();