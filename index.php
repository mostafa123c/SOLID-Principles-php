<?php

//use SOLID\SRP\Bus;
//use SOLID\SRP\Driver;
//use SOLID\SRP\Route;

//use SOLID\OCP\Car;
//use SOLID\OCP\FlyingInTheSky;
//use SOLID\OCP\Plane;
//use SOLID\OCP\Ship;
//use SOLID\OCP\Driver;
//use SOLID\OCP\Route;
//use SOLID\OCP\Trip;
//use SOLID\OCP\MoveOverWaves;


//Single Responsibility Principle

//require_once __DIR__ . DIRECTORY_SEPARATOR .'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';
//$mostafa= new Driver('Mostafa Emad', 23 , 'SDT152' , "Benha" );
//$route50 = new Route('benha' , 'cairo' , 45);
//$route70 = new Route( 'cairo' , 'alexandria' ,210);
//$bus = new Bus(201);
//$bus->setDriver($mostafa);
//$bus->setColor('red');
//$bus->setDoors('2');
//$bus->setMaximumSpeed(135);
//$bus->setNumberOfPassengers(50);
//$bus->addRoute($route50);
//$bus->addRoute($route70);
//echo $bus->move();
//echo '<pre>' , var_dump($bus);   SRP


//Open Closed Principle


//require_once __DIR__ . DIRECTORY_SEPARATOR .'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';
//$mostafa= new Driver('Mostafa Emad', 23 , 'SDT152' , "Benha" );
//$route50 = new Route('benha' , 'cairo' , 45);
//$route70 = new Route( 'cairo' , 'alexandria' ,210);
//$ship = new car();
//$ship->setDrivers($mostafa);
//$ship->setColor('red');
//$ship->setMaxSpeed(135);
//$ship->addRoute($route50);
//$ship->addRoute($route70);
//$ship->setMovable(new \SOLID\OCP\MoveOnTheRoads());
//$trip = new Trip($ship , 'Z500' , 500  , 220  );
//echo $trip->move();


//Liskov Substitution principles

use SOLID\LSP\Rectangle;
use SOLID\LSP\Square;
use SOLID\LSP\SubEncrypt;

require_once __DIR__ . DIRECTORY_SEPARATOR .'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';


$square= new Square();
$square->setWidth(20);
$square->setHeight(5);

echo $square->calculateArea();


function f(Rectangle $rectangle)
{
    if ($rectangle instanceof Square) {
        if ($rectangle->calculateArea() == 100) {
            echo 'There is something wrong';
        } else {
            echo 'Nothing is wrong';
        }
    }
}

f($square);

//
//$encrypt =  (new SubEncrypt());
//$encrypt->setString('Mostafa');
//echo $encrypt->encrypt();
