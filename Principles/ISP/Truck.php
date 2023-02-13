<?php


namespace SOLID\ISP;


class Truck implements Vehicle,Heavy
{
    public function move(){
        echo "I am moving";
    }

    public function stop(){
        echo "Stopping";
    }
    public function caryHeavyCargo(){
        echo "Having a cargo that wights 2000 kg";
    }
}