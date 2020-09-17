<?php declare(strict_types=1);

class Car {
    protected $model;
    protected $sign;
    protected $volume;
    protected $maxVolume;

    public function __construct(string $model,string $sign,int $volume, int $maxVolume)
    {
        $this->model = $model;
        $this->sign = $sign;
        $this->volume = $volume;
        $this->maxVolume = $maxVolume;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getSign(): string
    {
        return $this->sign;
    }

    /**
     * @return int
     */
    public function getVolume($distanceDriven): int
    {
        return $this->volume-$distanceDriven;
    }

    /**
     * @return int
     */
    public function getMaxVolume(): int
    {
        return $this->maxVolume;
    }
}

$car = new Car('123', '5647-000', 100, 100);

for ($i = 0; $i <= $car->getMaxVolume(); $i+=10){
    echo "Car's current speed: 80km/h" . PHP_EOL;
    echo "Car's driven distance: 10km`" . PHP_EOL;
    echo 'Car Model: ' . $car->getModel() . PHP_EOL;
    echo 'Car Number-Plate: ' . $car->getSign() . PHP_EOL;
    echo 'Car Current Volume: ' . $car->getVolume($i) . PHP_EOL;
    echo 'Car Maximum Volume: ' . $car->getMaxVolume() . PHP_EOL;
    echo PHP_EOL;
    sleep(1);
}

// Izveidot mašīnas objektu (nav nepieciešams izmantot mantošanu / inheritance)
// Auto ir marka, numura zīme, bākas tilpums (max)
// Pie jauna objekta izveides bāka ir pilna

// Izveido programmu, kas šo auto darbina braucot ar statisku ātrumu (nav nozīmes)
// Uz ekrāna tiek katru sekundi izvadīts nobrauktie 10 kilometri, kas uzrāda marku, numura zīmi, bākas AKTUĀLO TILPUMU.

// Iesniegšana
// Izveidot jaunu branch ar nosakumu TASK-4
// Darbu iesniegt classroomā ar linku uz ATVĒRTU PR.