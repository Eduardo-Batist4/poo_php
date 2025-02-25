<?php 

class Departament {
    public string $name;
    public string $city;

    public function __construct (string $name, string $city) {
        $this->name = $name;
        $this->city = $city;
    }

    public function departamentInfo () {
        echo "Departamento {$this->name}\n";
    }
}

