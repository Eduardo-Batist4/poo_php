<?php

class Manager extends Employee {
    private int $quantityEmployees;
    private int $employeeBonus;

    public function __construct(int $id, string $name, string $position, int $baseSalary, int $quantityEmployees, int $employeeBonus) {
        parent::__construct($id, $name, $position, $baseSalary);
        $this->quantityEmployees = $quantityEmployees;
        $this->employeeBonus = $employeeBonus;
    }

    public function calculateSalary()
    {
        $salaryManager = $this->baseSalary + ($this->employeeBonus * $this->quantityEmployees);
        echo "Salário do Gerente: R$:$salaryManager \n";
    }
}

