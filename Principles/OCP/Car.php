<?php


namespace SOLID\OCP;

use SOLID\OCP\Vehicle;

class Car extends Vehicle implements IVehicle
{
    public function move() : string {
        return "I move in the road";
    }
}