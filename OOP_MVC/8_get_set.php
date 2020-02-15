<?php
class Employee
{
    private $name;
    private $age;
    private $salary;

    public function getName()
    {
       return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary . '$';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    private function isAgeCorrect($age)
    {
        return $age >= 1 && $age <= 100;
    }
}

$emp = new Employee();
$emp->setSalary(3253);
echo $emp->getSalary();