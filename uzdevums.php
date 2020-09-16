<?php declare(strict_types=1);

class Car {
    protected int $volume;
    protected string $name;

    public function __construct(string $name, int $volume){
        $this->name = $name;
        $this->volume = $volume;
    }

    /**
     * @return int
     */
    public function getVolume(): int {
        return $this->volume;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }
}

class BMW extends Car {
    public function canChangeTires():string {
        return 'true';
    }
}

class Wolksvagen extends Car {
    public function hasComfySeats():string {
        return 'false';
    }
}

class Golf extends Car {
    protected ?string $model;

    public function __construct(string $name, int $volume,string $model=null) {
        $this->name = $name;
        $this->volume = $volume;
        $this->model = $model;
    }

    public function model():string {
        return $this->model;
    }
}

$cars = [
    new BMW("Jane's car", 200),
    new Wolksvagen("John's car", 100),
    new Golf("Frank's car", 300, 'A7')
];

foreach ($cars as $car) {
    echo $car->getName() . PHP_EOL;
    echo $car->getVolume() . 'l' . PHP_EOL;
    if($car instanceof Golf){
        echo 'Model: ' . $car->model();
    }
    elseif($car instanceof BMW){
        echo 'Can change tires? ' . $car->canChangeTires();
    }elseif($car instanceof Wolksvagen){
        echo 'Has comfortable seats? ' . $car->hasComfySeats();
    }
    echo PHP_EOL . PHP_EOL;
}