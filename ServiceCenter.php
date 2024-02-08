<?php
require_once 'Worker.php';
require_once 'Car.php';

class ServiceCenter {
    public $workers = [];
    public $cars = [];

    public function addWorker(Worker $worker) {
        $this->workers[] = $worker;
    }

    public function addCar(Car $car) {
        $this->cars[] = $car;
    }

    public function findFreeWorker($carBrand) {
        foreach ($this->workers as $worker) {
            if ($worker->isFree && $this->isSpecialized($worker->specialization, $carBrand)) {
                return $worker;
            }
        }
        return null;
    }

//    private function isSpecialized($specialization, $carBrand) {
//        switch ($specialization) {
//            case 'Універсал':
//                return true;
//            case 'Тільки нові моделі':
//                return false;
//            case 'Тільки старого типу':
//                return true;
//            case 'Тільки японці':
//                return true;
//            case 'Тільки ауді':
//                return true;
//            default:
//                return false;
//        }
//    }
}