<?php

include 'car.php';

class Worker
{
    public $isFree;
    public $hourlyRate;
    public $specialization;

    public function __construct($isFree, $hourlyRate, $specialization)
    {
        $this->isFree = $isFree;
        $this->hourlyRate = $hourlyRate;
        $this->specialization = $specialization;
    }


}

















