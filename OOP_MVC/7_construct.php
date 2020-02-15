<?php

class Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$employee = new Employee('Vasya', 25, 1000);
$employee1 = new Employee('Petya', 30, 2000);

echo $employee->salary + $employee1->salary;