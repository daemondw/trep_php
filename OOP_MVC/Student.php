<?php
class Student
{
    private $name;
    private $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1; // курс изначально равен 1
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function transferToNextCourse()
    {
        if (($this->course + 1) <= 5)
            $this->course++;
    }
}