<?php

class Person {
    public string $name;
    public int $age;
    public int $dayOfBirth;
    public int $monthOfBirth;
    public int $yearOfBirth;

    public function __construct(string $name, int $age, int $dayOfBirth, int $monthOfBirth, int $yearOfBirth) {
        $this->name = $name;
        $this->age = $age;
        $this->dayOfBirth = $dayOfBirth;
        $this->monthOfBirth = $monthOfBirth;
        $this->yearOfBirth = $yearOfBirth;
    }

    public function calculateAge (int $day, int $month, $year) {
        $result = $year - $this->yearOfBirth;
        if ($this->monthOfBirth > $month) {
            $result--;
        };
        $this->age = $result;
    }

    public function ageInfo () {
        echo "{$this->name} tem {$this->age} anos de idade. \n";
    }

    public function nameInfo () {
        echo "Nome: {$this->name}. \n";
    }

    public function setDateOfBirth (int $day, int $month, int $year) {
        $this->dayOfBirth = $day;
        $this->monthOfBirth = $month;
        $this->yearOfBirth = $year;
    }
};

$person = new Person("Eduardo", 30, 16, 7, 2001);
print_r($person);

echo "\n";
echo $person->calculateAge(18,2,2025);
echo "\n";
echo $person->ageInfo();
echo $person->nameInfo();
echo "\n";

echo $person->setDateOfBirth(26,4,2005);
echo $person->calculateAge(18,2,2025);
print_r($person);
