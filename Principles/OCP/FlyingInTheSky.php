<?php


namespace SOLID\OCP;

use SOLID\OCP\IMove;

class FlyingInTheSky implements IMove
{
    public function move() : string {
        return "I am plane and I am flying";
    }
}