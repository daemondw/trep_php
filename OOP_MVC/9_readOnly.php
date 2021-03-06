<?php
class Employee
{
    private $name;
    private $surname;
    private $salary;

    public function __construct($name, $surname, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}