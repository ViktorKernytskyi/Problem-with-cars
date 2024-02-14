<?php
require_once 'ServiceCenter.php';
require_once 'Car.php';
// Вихідний масив автомобілів
$cars = [
    0 => ['brand'=>'BMW', 'year' => 2010, 'color' => 'Чорний', 'manufacturingLocation' => 'Germany', 'currentBreakdown' => 'Проблема з двигуном'],
    1 => ['brand'=>'Ford', 'year' => 1995, 'color' => 'білий', 'manufacturingLocation' => 'America', 'currentBreakdown' => 'Пізда рулю'],
    2 => ['brand'=>'Lexus', 'year' => 2022, 'color' => 'зелений', 'manufacturingLocation' => 'Japan', 'currentBreakdown' => 'Проблема зі світломм'],
    3 => ['brand'=>'Kia', 'year' => 1980, 'color' => 'синій', 'manufacturingLocation' => 'Koreya', 'currentBreakdown' => 'Проблема з кондиціонером']
];
$diagnPrice = 100;
// Створення екземпляру сервісного центру
$serviceCenter = new ServiceCenter();

// Додавання автомобілів до сервісного центру
foreach ($cars as $car) {
    $serviceCenter->addCar(new Car($car['brand'], $car['year'], $car['color'], $car['manufacturingLocation'], $car['currentBreakdown']));
}


// Виведення інформації про автомобілі в сервісному центру
//echo "Автомобілі в сервісному центрі:<br>";
if (!empty($serviceCenter->cars)) {
    foreach ($serviceCenter->cars as $car) {
        echo "Марка: {$car->brand}, Рік: {$car->year}, Колір: {$car->color}, Місце виробництва: {$car->manufacturingLocation}, Поточна поломка: {$car->currentBreakdown}<br>";
    }
}

require_once('form.php');
?>