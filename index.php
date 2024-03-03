<?php
require_once('Car.php');
require_once('ServiceCenter.php');
require_once('form.php');

// Обробка даних форми
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $brand = $_POST['brand'] ?? '';
    $year = $_POST['year'] ?? '';
    $manufacturingLocation = $_POST['manufacturingLocation'] ?? '';
}
    // Створення екземпляру автомобіля з отриманими даними
   // $car = new Car($brand, $year, '', $manufacturingLocation, '');
// Отримання доступу до даних про автомобілі з файлу data.php


    foreach ($cars as $carData) {
        // Створення об'єкту машини для кожного запису
        $car = new Car($carData['brand'], $carData['year'], $carData['color'], $carData['manufacturingLocation'], $carData['currentBreakdown']);

        // Створення екземпляру сервісного центру
    $serviceCenter = new ServiceCenter();

    // Ремонт автомобіля

    $serviceCenter->findAvailableEmployee($car);


        // Перевірка, чи є авто запиту в масиві $cars
        $carExists = false;
        foreach ($cars as $carData) {
            if ($carData['brand'] === $brand) {
                $carExists = true;

            }
        }

        if ($carExists) {
            // Пошук вільного працівника
            $availableEmployee = $serviceCenter->findAvailableEmployee($brand);

            if ($availableEmployee) {
                echo "Знайдено вільного працівника! Мпрацівник проводить діагностику.";

            } else {
                echo "Вибачте, усі майстри зайняті або не можуть прийняти ваш автомобіль.";
            }
        } else {
            echo "Введений бренд автомобіля не знайдено.";
        }

}





?>