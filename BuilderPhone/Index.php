<?php

// Product
require_once "Product/SmartPhone.php";

// Builder Interface
require_once "Contracts/SmartPhoneBuilder.php";

// Concrete Products
require_once "ConcreteProducts/ApplePhone.php";
require_once "ConcreteProducts/HTCPhone.php";
require_once "ConcreteProducts/SamsungPhone.php";

// Concrete Builder
require_once "ConcreteBuilders/ApplePhoneBuilder.php";
require_once "ConcreteBuilders/HTCPhoneBuilder.php";
require_once "ConcreteBuilders/SamsungPhoneBuilder.php";

// Director
require_once "SmartPhoneCreator.php";


$creator = new SmartPhoneCreator();

$samsungBuilder = new SamsungPhoneBuilder([
    'cpu' => 'Snapdragon 820',
    'gpu' => 'Adreno 530',
    'ram' => 4,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS', 'GLONASS'],
    'camera' => 12,
    'case' => 'Silver Metalic Case'
]);
$appleBuilder = new ApplePhoneBuilder([
    'cpu' => 'A10',
    'gpu' => 'Apple',
    'ram' => 3,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS', 'GLONASS'],
    'camera' => 12,
    'case' => 'Black Matt Case'
]);
$htcBuilder = new HTCPhoneBuilder([
    'cpu' => 'Snapdragon 810',
    'gpu' => 'Adreno 520',
    'ram' => 4,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS'],
    'camera' => 8,
    'case' => 'Blue Matt Case'
]);

$note7 = $creator->buildPhone($samsungBuilder);
$iphone7Plus = $creator->buildPhone($appleBuilder);
$htc = $creator->buildPhone($htcBuilder);

echo $note7;
echo $iphone7Plus;
echo $htc;