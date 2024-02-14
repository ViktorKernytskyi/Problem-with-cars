<?php

include 'index.php';
include 'car.php';
class Worker {
    public $isFree;
    public $specialization;

    public function __construct( $isFree, $specialization) {
        $this->isFree = $isFree;
        $this->specialization = $specialization;
    }


    public function takeOrder($car)
    {
        if ($this->isFree && $this->specialization == $car->brand && $_POST['brand'] === 'brand') {
            echo "Працівник прийняв замовлення на {$car->brand}.\n";
            return true;
        } else {
            echo "Вибачте, немає доступного працівника для {$car->brand}.\n";
            return false;
        }
    }

    public function diagnose($car)
    {
        // Логіка діагностики на основі бренду автомобіля та його поточної поломки
        switch ($car->brand) {
            case 'BMW':
                switch ($car->currentBreakdown) {
                    case 'Проблема з двигуном':
                        return [
                            'status' => true,
                            'diagnPrice' => 200
                        ];
                    // Додати обробку інших проблем для BMW, якщо потрібно
                    default:
                        return [
                            'status' => false,
                            'diagnPrice' => 0
                        ];
                }
            case 'Ford':
                switch ($car->currentBreakdown) {
                    case 'Пізда рулю':
                        return [
                            'status' => true,
                            'diagnPrice' => 150
                        ];
                    // Додати обробку інших проблем для Ford, якщо потрібно
                    default:
                        return [
                            'status' => false,
                            'diagnPrice' => 0
                        ];
                }
            // Додати обробку інших брендів автомобілів, якщо потрібно
            default:
                return [
                    'status' => false,
                    'diagnPrice' => 0
                ];
        }
    }
}
















