<?php

require_once "Departament.php";


class University {
    public string $name;
    public ?Departament $departament;


    public function __construct(string $name, ?Departament $departament = null) {
        $this->name = $name;
        $this->departament = $departament;
    }

    public function nameInfo () {
        if ($this->departament) {
            echo "Universidade {$this->name} - Departamento: {$this->departament->name} \n";
        } else {
            echo "Universidade {$this->name}\n";
        }
    }
};

