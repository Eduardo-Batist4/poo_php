<?php

class University {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function nameInfo () {
        echo "Universidade {$this->name}. \n";
    }
};

