<?php

require_once "Employee.php";
require_once "Manager.php";

$employee1 = new Employee(1, "Rogerio", "Operador", 2000);
$manager1 = new Manager(10, "Eduardo", "Gerente", 5000, 10, 200);

$employee1->calculateSalary();
$manager1->calculateSalary();
