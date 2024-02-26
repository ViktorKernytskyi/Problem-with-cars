<?php

include 'data.php';

class Worker
{
    public $isFree;
    public $specialization;

    public function __construct($isFree = true, $specialization)
    {
        $this->isFree = $isFree;
        $this->specialization = $specialization;
    }

    public function takeOrder($car) {
        if ($this->isFree && $this->specialization === $car->brand && $_POST['brand'] === 'brand')   {
        //if ($this->isFree && ($this->specialization === 'Універсал' || $this->specialization === $car->brand)) {
            echo "Працівник прийняв замовлення на {$car->brand}.\n";
            return true;
        } else {
            echo "<br>" . "Вибачте, немає доступного працівника для {$car->brand}." . "\n";
            return false;
        }
    }

    public function diagnose($car) {
        // Логіка для діагностики
        $diagnPrice = rand(50, 200);
        $status = true; // Вважаємо, що діагностика завжди успішна
        return ['status' => $status, 'diagnPrice' => $diagnPrice];
    }

    public function repair($car) {
        // Логіка для ремонту
        $diagnResult = $this->diagnose($car);
        if ($diagnResult['status']) {
            $repairPrice = $this->calculateRepairPrice($diagnResult['diagnPrice']);
            // Позначимо, що працівник зараз зайнятий
            $this->isFree = false;
            echo "Ремонт автомобіля {$car->brand} розпочато. Ціна ремонту: {$repairPrice}.\n";
            // Моделюємо ремонт, можна використовувати реальну логіку
            sleep(3); // Припустимо, що ремонт займає 3 секунди
            // Позначимо, що працівник знову доступний після ремонту
            $this->isFree = true;
            echo "Ремонт автомобіля {$car->brand} завершено.\n";
            return true;
        } else {
            echo "Ми не можемо виправити проблему автомобіля {$car->brand}, вибачте.\n";
            return false;
        }
    }

    private function calculateRepairPrice($diagnPrice) {
        // Випадкове призначення ціни з урахуванням ціни за діагностику
        $basePrice = rand(100, 500);
        return $basePrice + $diagnPrice;
    }
}

















