<?php


class Worker {
    public $isFree;
    public $specialization;

    public function __construct( $isFree, $specialization) {
        $this->isFree = $isFree;
        $this->specialization = $specialization;
    }


    public function takeOrder($car)
    {
        if ($this->isFree && $this->specialization == $car->brand) {
            echo "Працівник прийняв замовлення на {$car->brand}.\n";
            return true;
        } else {
            echo "Вибачте, немає доступного працівника для {$car->brand}.\n";
            return false;
        }
    }

    public function diagnose($car)
    {
        // працівник успішно діагностує проблему
        $isSuccessful = true;
        return $isSuccessful;
    }
}







