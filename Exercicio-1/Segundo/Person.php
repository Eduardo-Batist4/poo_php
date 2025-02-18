<?php
require_once "University.php";

class Person {
    public string $name;
    public University $universityName;

    public function __construct(string $name, University $universityName) {
        $this->name = $name;
        $this->universityName = $universityName;
    }

    public function personInfo () {
        echo "Nome: {$this->name} Trabalha na Univerisdade: {$this->universityName->name} \n";
    }
}


