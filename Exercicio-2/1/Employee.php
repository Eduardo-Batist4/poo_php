<?php 

class Employee {
    protected int $id;
    protected string $name;
    protected string $position;
    protected int $baseSalary;

    public function __construct(int $id, string $name, string $position, int $baseSalary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->position = $position;
        $this->baseSalary = $baseSalary;
    }

    public function calculateSalary () {
        echo "Salário do {$this->position}: R$:{$this->baseSalary} \n";
    }
}


