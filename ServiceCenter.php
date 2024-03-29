<?php
require_once 'Worker.php';
require_once 'Car.php';

class ServiceCenter
{
    private static $cars;
    public $workers = [];
    private $currentBreakdown;


    public function __construct()
    {

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



    public function diagnose($car) {
        // Логіка для діагностики
        $diagnPrice = rand(50, 200);
        // Перевіряємо, чи можливий ремонт
        echo   "<br>" . "Вартість діагностики складає - " . $diagnPrice ." &nbsp"."грн.". "<br>";
        if($this->brand  ){
            $status = true; // Вважаємо,  що ремонт можливий
        }
        else {
            $status = false;
        }
        return ['status' => $status, 'diagnPrice' => $diagnPrice];

    }



    public function repair($car) {
         // Логіка для ремонту
        $diagnResult = $this->diagnose($car);
        if ($diagnResult['status'] ) {
            $repairPrice = $this->calculateRepairPrice($diagnResult['diagnPrice']);
            // Позначимо, що працівник зараз зайнятий
            //$this->isFree = true;
            if ($status = true ) {

                echo "<br>" . " Ремонт автомобіля розпочато.". "<br>";
            }
            // Моделюємо ремонт, можна використовувати реальну логіку
            sleep(3); // Припустимо, що ремонт займає 3 секунди
            // Позначимо, що працівник знову доступний після ремонту
           // $this->isFree = true;

            echo "Ремонт автомобіля завершено.  Ціна ремонту: {$repairPrice}". "<br>";
            return true;
        } else {
            echo "Ми не можемо виправити проблему автомобіля  , вибачте". "<br>";
            return false;
        }
    }
    private function calculateRepairPrice($diagnPrice) {
        // Випадкове призначення ціни з урахуванням ціни за діагностику
        $basePrice = rand(100, 500);
        return $basePrice + $diagnPrice;
    }
//    public  function present(){
//        echo 'З повагою ServiceCenter.';
//    }

}
//$ServiceCenter = new ServiceCenter();
//$ServiceCenter->present();


