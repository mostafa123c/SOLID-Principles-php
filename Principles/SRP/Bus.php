<?php

namespace SOLID\SRP;

class Bus
{
    /**
     * @var int
     */
    private $busNumber;

    /**
     * @var int
     */
    private $numberOfPassengers;

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $maximumSpeed;

    /**
     * @var int
     */
    private $doors;

    /**
     * @var Driver
     */
    private $driver;

    /**
     * @var array
     */
    private $route = [];

    public function __construct($busNumber)
    {
        $this->setBusNumber($busNumber);
    }

    /**
     * @return int
     */
    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    /**
     * @param int $numberOfPassengers
     */
    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMaximumSpeed(): string
    {
        return $this->maximumSpeed . 'K/h';
    }

    /**
     * @param int $maximumSpeed
     */
    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }

    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     */
    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return array
     */
    public function getRoute(): array
    {
        return $this->route;
    }

    /**
     * @param Route $route
     * @return void
     */
    public function addRoute(Route $route):void
    {
        $this->route[] = $route;
    }

    /**
     * @return int
     */
    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    /**
     * @param int $busNumber
     */
    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @param string $from
     * @param string $to
     * @return string
     */
    public function driveToRoute(string $from , string $to):string
    {
        return 'the bus is moving from' . $from .' to ' . $to;
    }

    public function doMaintenance()
    {
        return 'the bus is doing maintenance right now';
    }

    /**
     * @return string
     */
    public function move():string
    {
        $output ='';
        foreach ($this->getRoute() as $route)
        {
            $output .=  '<p>Iam moving now from ' . $route->getSource()
                . ' to ' .$route->getDestination()
                . ' at a maximum speed of '. $this->getMaximumSpeed()
                .  ',The driver is : ' . $this->getDriver()->getName()
                .'</p>';
        }
        return $output;
    }

}