<?php

class Fuel {};

abstract class Car {
    protected $make;
    public function getMake() : string {
        return $this->make;
    }

    abstract public function useFuel(Fuel $fuel) : Car;
}

class Dmc12 extends Car {
    public function __construct() {
        $this->make = 'DeLorean';
    }
    public function useFuel(Fuel $fuel) : Car {
        echo 'Back to the future!' . PHP_EOL;
        return $this;
    }
}

$dmc12 = new Dmc12;
$dmc12->useFuel(new Fuel);
