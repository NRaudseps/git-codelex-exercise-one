<?php declare(strict_types=1);

class Car
{
    protected $model;
    protected $sign;
    protected $volume;
    protected $maxVolume;

    public function __construct(string $model, string $sign, int $volume, int $maxVolume)
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
        return $this->volume - $distanceDriven;
    }

    /**
     * @return int
     */
    public function getMaxVolume(): int
    {
        return $this->maxVolume;
    }
}

class SuperCar extends Car
{
    public function isPinCorrect($pin, $car)
    {
        switch ($pin) {
            case 123 === $pin && 1 === $car:
                return true;
            case 234 === $pin && 2 === $car:
                return true;
            case 345 === $pin && 3 === $car:
                return true;
            default:
                return false;
        }
    }
}

echo 'Choose Your Car (1-3): ' . PHP_EOL;
echo PHP_EOL;
echo 'Bugatti: ' . PHP_EOL;
echo 'Lamborghini: ' . PHP_EOL;
echo 'McLarren: ' . PHP_EOL;
$input = (int)readline();
if($input > 0 && $input < 3) {
    $pin = (int)readline('Enter the PIN code: ');
}
echo PHP_EOL;
$car = new SuperCar('', '', 0, 0);
$bool = false;

switch ($input) {
    case 1:
        for($i = 0; $i < 3;$i++) {
            if ($car->isPinCorrect($pin, $input)) {
                $car = new SuperCar('123', '5647-000', 100, 100);
                $bool = true;
                break;
            } else {
                echo 'Wrong PIN' . PHP_EOL;
                $pin = (int)readline('Enter the PIN code: ');
            }
        }
        break;
    case 2:
        for($i = 0; $i < 3;$i++) {
            if ($car->isPinCorrect($pin, $input)) {
                $car = new SuperCar('1234', '4529-000', 150, 150);
                $bool = true;
                break;
            } else {
                echo 'Wrong PIN' . PHP_EOL;
                $pin = (int)readline('Enter the PIN code: ');
            }
        }
        break;
    case 3:
        for($i = 0; $i < 3;$i++) {
            if ($car->isPinCorrect($pin, $input)) {
                $car = new SuperCar('034', '9827-000', 120, 120);
                $bool = true;
                break;
            } else {
                echo 'Wrong PIN' . PHP_EOL;
                $pin = (int)readline('Enter the PIN code: ');
            }
        }
        break;
    default:
        echo 'Not on option';
        break;
}

echo PHP_EOL;
if($bool) {
    for ($i = 0; $i <= $car->getMaxVolume(); $i += 10) {
        echo "Car's current speed: 80km/h" . PHP_EOL;
        echo "Car's driven distance: 10km" . PHP_EOL;
        echo "The car has driven: " . $i . 'km' . PHP_EOL;
        echo 'Car Model: ' . $car->getModel() . PHP_EOL;
        echo 'Car Number-Plate: ' . $car->getSign() . PHP_EOL;
        echo 'Car Current Volume: ' . $car->getVolume($i) . PHP_EOL;
        echo 'Car Maximum Volume: ' . $car->getMaxVolume() . PHP_EOL;
        echo PHP_EOL;
        sleep(1);
    }
}

// Izveidot mašīnas objektu (nav nepieciešams izmantot mantošanu / inheritance)
// Auto ir marka, numura zīme, bākas tilpums (max)
// Pie jauna objekta izveides bāka ir pilna

// Izveido programmu, kas šo auto darbina braucot ar statisku ātrumu (nav nozīmes)
// Uz ekrāna tiek katru sekundi izvadīts nobrauktie 10 kilometri, kas uzrāda marku, numura zīmi, bākas AKTUĀLO TILPUMU.

// Iesniegšana
// Izveidot jaunu branch ar nosakumu TASK-4
// Darbu iesniegt classroomā ar linku uz ATVĒRTU PR.

// 2.
// Pievienot odometru, kas skaita līdzi kāds ir auto kopējais nobraukums. (restartējot aplikāciju odometrs būs 0!!!)

// 3.
// Pievienot opciju izvēlēties auto no saraksta (palaižot aplikāciju izdrukājas saraksts ar pieejamajiem auto)
// Ievadot skaitli vai nosaukumu izvēlas kuru auto darbinās

// 4.
// Pievienot objektam/opciju auto iestartēt ar speciāli izvēlētu pin kodu (katram auto unikāls)
// izvēloties auto no saraksta, piedāvā iedarbināt auto, ievadot pin kodu, pin kods, ja 3x ir n