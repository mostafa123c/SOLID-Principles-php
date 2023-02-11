<?php


namespace SOLID\OCP;


abstract class Vehicle
{

    /**
     * @var IMove
     */
    private $movable;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $maxSpeed;

    /**
     * @var Driver
     */
    private $drivers;

    /**
     * @var array
     */
    private $route = [];

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
    public function getMaxSpeed(): string
    {
        return $this->maxSpeed . "K/H";
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }


    /**
     * @return Driver
     */
    public function getDrivers(): Driver
    {
        return $this->drivers;
    }

    /**
     * @param Driver $drivers
     */
    public function setDrivers(Driver $drivers): void
    {
        $this->drivers = $drivers;
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
     */
    public function addRoute(Route $route): void{
        $this->route[] = $route;
    }

    /**
     * @return IMove
     */
    public function getMovable(): IMove
    {
        return $this->movable;
    }

    /**
     * @param IMove $movable
     */
    public function setMovable(IMove $movable): void
    {
        $this->movable = $movable;
    }

    /**
     * @return string
     */
    public function move(): string
    {
        return $this->getMovable()->move();
    }

}