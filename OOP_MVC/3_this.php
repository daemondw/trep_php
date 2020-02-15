<?php

//class Employee
//{
//    public $name;
//    public $age;
//    public $salary;
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//
//    public function checkAge()
//    {
//        if ($this->age > 18) {
//            return true;
//        }
//        return false;
//    }
//}

//$employee1 = new Employee;
//
//$employee1->name = 'Ivan';
//$employee1->age = 25;
//$employee1->salary = 1000;
//
//$employee2 = new Employee;
//
//$employee2->name = 'Vasya';
//$employee2->age = 26;
//$employee2->salary = 2000;

//echo $employee1->getSalary() + $employee2->getSalary();


class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
        if ($age >= 18) {
            $this->age = $age;
        }
    }
}

$user = new User;
$user->name = 'Kolya';
$user->age = 25;

$user->setAge(10);

//echo $user->age;


class Employee
{
    public $name;
    public $salary;

    public function doubleSalary()
    {
        return $this->salary * 2;
    }
}

$employee = new Employee;

$employee->salary = 1300;

//echo $employee->salary;
//
//echo '<br>';
//echo $employee->doubleSalary();

class Rectangle
{
    public $width;
    public $hight;

    public function setSquare()
    {
        return $this->width * $this->hight;
    }

    public function getPerimeter()
    {
        return ($this->hight + $this->width) * 2;
    }
}

$rectangle = new Rectangle;

$rectangle->width = 14;
$rectangle->hight = 9;

//echo $rectangle->getPerimeter();
//echo '<br>';
//echo $rectangle->setSquare();