<?php declare(strict_types=1);

class Person {
    protected string $name;
    protected string $surname;
    protected ?string $middleName;

    public function __construct(string $name, string $surname, string $middlename = null) {
        $this->name = $name;
        $this->surname = $surname;
        $this->middleName = $middlename;
    }

    //PHPStrorma if forsa fica ka vini automatiski genere getName(), getSurname() utt
    //Vins vel klat pieliek tos komentus leja

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string {
        return $this->surname;
    }

    /**
     * @return string|null
     */
    public function getMiddleName(): ?string {
        return $this->middleName;
    }
}

$person1 = new Person('Bob', 'Dole');
$person2 = new Person('Jane', 'Doe');
$person3 = new Person('Frank', 'Ocean', 'Smith');

echo $person1->getName() . ' ' . $person1->getMiddleName() . ' ' . $person1->getSurname() . PHP_EOL;
echo $person2->getName() . ' ' . $person2->getMiddleName() . ' ' . $person2->getSurname() . PHP_EOL;
echo $person3->getName() . ' ' . $person3->getMiddleName() . ' ' . $person3->getSurname() . PHP_EOL;
