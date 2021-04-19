<?php

class Driver
{
    private $vehicle;

    public function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function startVehicle()
    {
        $this->vehicle->start();
    }
}

class Bike implements VehicleInterface
{

    public function start()
    {
        print("Bike Start");
    }
}

class Car implements VehicleInterface
{

    public function start()
    {
        print("Car Start");
    }
}

class Plane implements VehicleInterface
{

    public function start()
    {
       print("Plane Start");
    }
}

interface VehicleInterface
{
    public function start();
}

$bike = new Bike();
$car = new Car();
$plane = new Plane();
$driver = new Driver($bike);
$driver->startVehicle();
?>