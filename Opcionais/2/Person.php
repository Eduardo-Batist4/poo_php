<?php
require_once "University.php";
require_once "Departament.php";

class Person {
    public string $name;
    public University $universityName;
    public ?Departament $departament;

    public function __construct(string $name, University $universityName) {
        $this->name = $name;
        $this->universityName = $universityName;
    }

    public function personInfo () {
        // print_r($this->universityName->departament);
        if ($this->universityName->departament) {
            echo "Nome: {$this->name} - Trabalha na Univerisdade: {$this->universityName->name} - Departamento: {$this->universityName->departament->name} na cidade de: {$this->universityName->departament->city} \n";
        } else {
            echo "Nome: {$this->name} - Trabalha na Univerisdade: {$this->universityName->name} \n";
        }
    }
}


