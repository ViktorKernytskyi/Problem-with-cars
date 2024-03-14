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



}





?>