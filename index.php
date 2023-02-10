<?php

use SOLID\SingleResponsabilityPrinciple\Bus;
use SOLID\SingleResponsabilityPrinciple\Driver;
use SOLID\SingleResponsabilityPrinciple\Route;

require_once __DIR__ . DIRECTORY_SEPARATOR .'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';


$mostafa= new Driver('Mostafa Emad', 23 , 'SDT152' , "Benha" );

$route50 = new Route('benha' , 'cairo' , 45);
$route70 = new Route( 'cairo' , 'alexandria' ,210);

$bus = new Bus(201);
$bus->setDriver($mostafa);
$bus->setColor('red');
$bus->setDoors('2');
$bus->setMaximumSpeed(135);
$bus->setNumberOfPassengers(50);
$bus->addRoute($route50);
$bus->addRoute($route70);
echo $bus->move();

//echo '<pre>' , var_dump($bus);
