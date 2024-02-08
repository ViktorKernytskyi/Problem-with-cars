<?php


class Worker {
    public $pricePerHour;
    public $isFree;
    public $specialization;

    public function __construct($pricePerHour, $isFree, $specialization) {
        $this->pricePerHour = $pricePerHour;
        $this->isFree = $isFree;
        $this->specialization = $specialization;
    }
}
