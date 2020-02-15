<?php
class Employee
{
    public $name;
    public $surname;
    public $patronymic;
    public $salary;

    public function __construct($name, $surname, $patronymic, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->salary = $salary;
    }
}