<?php
require_once('Car.php');
require_once('ServiceCenter.php');
require_once('data.php');
require_once('form.php');

// Обробка даних форми
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $brand = $_POST['brand'] ?? '';
    $year = $_POST['year'] ?? '';
    $manufacturingLocation = $_POST['manufacturingLocation'] ?? '';

    // Створення екземпляру автомобіля з отриманими даними
    $car = new Car($brand, $year, '', $manufacturingLocation, '');

    // Створення екземпляру сервісного центру
    $serviceCenter = new ServiceCenter();

    // Ремонт автомобіля
    $serviceCenter->repairCar($car);
}





?>