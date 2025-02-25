<?php

class Person {
    public string $name;
    public int $age;
    private ?Person $father;
    private ?Person $mother;

    public function __construct(string $name, int $age, ?Person $father = null, ?Person $mother = null) {
        $this->name = $name;
        $this->age = $age;
        $this->father = $father;
        $this->mother = $mother;
    }

    public function ancestors($nivel = 2) {
        echo str_repeat("-", $nivel) . " Nome: $this->name, Idade: $this->age\n";
        
        if ($this->father) {
            echo str_repeat("-", $nivel) . " Pai: \n";
            $this->father->ancestors($nivel + 5);
        }
        
        if ($this->mother) {
            echo str_repeat("-", $nivel) . " Mãe: \n";
            $this->mother->ancestors($nivel + 5);
        }
    }

}


$grandFather = new Person("Romário", 80);
$grandMother = new Person("Mulher do Romário", 78);

$father = new Person("Cristiano Ronaldo", 40, $grandFather);
$mother = new Person("Georgina", 58, null, $grandMother);

$son = new Person("Messi", 35, $father, $mother);

$son->ancestors();