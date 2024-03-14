<?php


class Car
{
    public $id;
    public $brand;
    public $year;
    public $color;
    public $manufacturingLocation;
    public $currentBreakdown;


    // Вихідний масив автомобілів
    static array $cars = [
        0 => ['brand'=>'BMW', 'year' => 2010, 'color' => 'Чорний', 'manufacturingLocation' => 'Germany', 'currentBreakdown' => 'Проблема з двигуном'],
        1 => ['brand'=>'Ford', 'year' => 1995, 'color' => 'білий', 'manufacturingLocation' => 'America', 'currentBreakdown' => 'Пізда рулю'],
        2 => ['brand'=>'Lexus', 'year' => 2022, 'color' => 'зелений', 'manufacturingLocation' => 'Japan', 'currentBreakdown' => 'Проблема зі світлом'],
        3 => ['brand'=>'Kia', 'year' => 1980, 'color' => 'синій', 'manufacturingLocation' => 'Koreya', 'currentBreakdown' => 'Проблема з кондиціонером']
    ];


    public function __construct($id) {
        $car = self::$cars[$id];
        $this->brand = $car['brand'];
        $this->year = $car['year'];
        $this->color =  $car['color'];
        $this->manufacturingLocation = $car['manufacturingLocation'];
        $this->currentBreakdown = $car['currentBreakdown'];
    }


    /**
     * @return array|array[]
     */
    public static function getCars(): array
    {
        return self::$cars;
    }

    /**
     * @return mixed
     */
    public function getBrand(): mixed
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getColor(): mixed
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getCurrentBreakdown(): mixed
    {
        return $this->currentBreakdown;
    }

    /**
     * @param mixed $currentBreakdown
     */
    public function setCurrentBreakdown(mixed $currentBreakdown): void
    {
        $this->currentBreakdown = $currentBreakdown;
    }

        public static function findAvailableEmployee($brand, $car)
    {
        $employeeAvailable = false; // Змінна для відстеження доступності працівника
        foreach (self::$cars as $value) {

            if ($brand === $value['brand']) {
                // Якщо є працівник, який обслуговує автомобіль потрібного бренду, встановлюємо прапорець доступності
                $employeeAvailable = true;
                break; // Зупиняємо цикл, оскільки знайдено доступного працівника
            }
        }
        if ($employeeAvailable) {
            echo "Працівник прийняв замовлення на автомобіль бренду - $brand. " . "<br>";
            //echo "Працівник прийняв замовлення на  {$car->brand}.". "<br>";
        } else {
            echo "Вибачте, немає доступного працівника для $brand " . $car->present;

            return $car;

        }
    }

    public function present(){
        echo 'З повагою ServiceCenter.';
    }


}
