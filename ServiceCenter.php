<?php
require_once 'Worker.php';
require_once 'Car.php';

class ServiceCenter {
    public $workers = [];
    //public $cars = [];



//class Workshop {
//    public $workers = [];

    public function __construct() {
        // Додати працівників в майстерню
        $this->workers[] = new Worker('Універсал', true);
        $this->workers[] = new Worker('Універсал', true);
        $this->workers[] = new Worker('Нові моделі', true);
        $this->workers[] = new Worker('Старого типу', true);
        $this->workers[] = new Worker('Японці', true);
        $this->workers[] = new Worker('Ауді', true);
    }

    public function repairCar($car) {
        foreach ($this->workers as $worker) {
            if ($worker->takeOrder($car)) {
                if ($worker->diagnose($car)) {
                    echo "Автомобіль успішно відремонтовано.\n";
                    //  працівник отримує оплату за ремонт
                    // $worker->isFree = true;
                } else {
                    echo "Ми не можемо виправити проблему, вибачте.\n";
                    //  працівник отримує оплату навіть якщо проблему не вдається вирішити
                    // $worker->isFree = true;
                }
                return;
            }
        }
        echo "Немає доступних працівників для даної марки автомобіля.\n";
    }
}