<?php declare(strict_types=1);

// Concrete Products
require_once "Parts/Car.php";
require_once "Parts/Door.php";
require_once "Parts/Engine.php";
require_once "Parts/Truck.php";
require_once "Parts/Vehicle.php";
require_once "Parts/Wheel.php";

// Builder Interface
require_once "Builder.php";

// Concrete Builder
require_once "CarBuilder.php";
require_once "TruckBuilder.php";
require_once "Director.php";


function canBuildTruck()
{
    $truckBuilder = new TruckBuilder();
    $newVehicle = (new Director())->build($truckBuilder);
    return $newVehicle;

}

function canBuildCar()
{
    $carBuilder = new CarBuilder();
    $newVehicle = (new Director())->build($carBuilder);
    return $newVehicle;
}
$vehicle = canBuildCar();
echo json_encode($vehicle);