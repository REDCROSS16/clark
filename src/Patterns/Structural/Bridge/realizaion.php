<?php

namespace App\Patterns\Structural\Bridge;

$driverJohn = new John('John');
$mike = new Mike('Mike');

$bike = new Bike($driverJohn);
$car = new Car($mike);


function exploreBridgeDriving(Vechicle $vechicle) {
    $vechicle->drive();
}

exploreBridgeDriving($bike);
exploreBridgeDriving($car);