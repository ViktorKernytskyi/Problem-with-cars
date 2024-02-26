<?php
require_once 'Worker.php';
require_once 'Car.php';


class ServiceCenter {
    public $workers = [];
   // public $cars = [];





    public function __construct() {
        // Додати працівників в майстерню
        $this->workers[] = new Worker('Універсал', true);
        $this->workers[] = new Worker('Універсал', true);
        $this->workers[] = new Worker('Тільки нові моделі (після 2005 року)', true);
        $this->workers[] = new Worker('Тільки німці', true);
        $this->workers[] = new Worker('Тільки старого типу (до 1998)', true);
        $this->workers[] = new Worker('Тільки японці, але двигун будь якої машини', true);
        $this->workers[] = new Worker('Тільки ауді, але якщо інші зайняті, то без виїбонів - універсал', true);
    }

    public function repairCar($car) {
        foreach ($this->workers as $worker) {
            if ($worker->takeOrder($car)) {
                $repairResult = $worker->repair($car);
                if ($repairResult) {
                    return;
                }
            }
        }
        echo "<br>" . "Немає доступних працівників для даної марки автомобіля." ;
    }


}