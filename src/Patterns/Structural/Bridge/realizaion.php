<?php


$driverJohn = new \App\Patterns\Structural\Bridge\John('John');
$mike = new \App\Patterns\Structural\Bridge\Mike('Mike');

$bike = new \App\Patterns\Structural\Bridge\Bike($driverJohn);
$car = new \App\Patterns\Structural\Bridge\Car($mike);


function exploreBridgeDriving(Vechicle $vechicle) {
    $vechicle->drive();
}

exploreBridgeDriving($bike);
exploreBridgeDriving($car);