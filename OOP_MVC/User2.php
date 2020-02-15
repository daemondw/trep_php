<?php
class User2
{
    private $surname;
    private $name;
    private $patronymic;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
        return $this;
    }

    public function getFullName()
    {
        $fullname = $this->name . $this->surname . $this->patronymic;
        return $fullname;
    }
}