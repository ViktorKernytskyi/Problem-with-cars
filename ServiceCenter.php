<?php
require_once 'Worker.php';
require_once 'Car.php';
require_once 'data.php';


class ServiceCenter
{
    public $workers = [];

    // public $cars = [];


    public function __construct()
    {
        // Ініціалізуємо працівників
        // Можливо, краще ініціалізувати їх зовні у конструкторі, але залишимо це вам
        $this->initializeEmployees();
    }

    private function initializeEmployees()
    {
        // Створюємо працівників
        $worker1 = new Worker(50, true, 'Універсал');
        $worker2 = new Worker(45, true, 'Універсал');
        $worker3 = new Worker(55, true, 'Тільки нові моделі (після 2005 року)');
        $worker4 = new Worker(60, true, 'Тільки німці');
        $worker5 = new Worker(40, true, 'Тільки старого типу (до 1998)');
        $worker6 = new Worker(65, true, 'Тільки японці, але двигун будь якої машини');
        $worker7 = new Worker(70, true, 'Тільки ауді, але якщо інші зайняті, то без виїбонів - універсал');

        // Додаємо працівників до списку працівників СТО
        $this->workers = [$worker1, $worker2, $worker3, $worker4, $worker5, $worker6, $worker7];
    }



    public function findAvailableEmployee($brand, $cars) {
        var_dump($_POST['brand']);

        foreach ($cars as $car) {
            if ($car['brand'] === $brand) {
                echo "Працівник прийняв замовлення на {$car->brand}.";
                foreach ($this->workers as $worker) {
                    if ($worker->isAvailable && $worker->specialization === $car->brand ) {
                        return $worker;
                    }
                }
            }
        }
        echo "<br>" . "Вибачте, немає доступного працівника для {$car->brand}.";
        return null;
    }
    public function present(){
        echo 'ServiceCenter';
    }


}