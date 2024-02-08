<?php


class Car
{
    public $brand;
    public $year;
    public $color;
    public $manufacturingLocation;
    public $currentBreakdown;


public function __construct($brand, $year, $color, $manufacturingLocation, $currentBreakdown) {

        $this->brand = $brand;
        $this->year = $year;
        $this->color = $color;
        $this->manufacturingLocation = $manufacturingLocation;
        $this->currentBreakdown = $currentBreakdown;
    }
}
