<?php
class User
{
    public $name;
    public $age;

    // Метод для проверки возраста:
    public function isAgeCorrect($age)
    {
        return $age >= 18 and $age <= 60;
    }

    // Метод для изменения возраста юзера:
    public function setAge($age)
    {
        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    // Метод для добавления к возрасту:
    public function addAge($years)
    {
        $newAge = $this->age + $years; // вычислим новый возраст

        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge; // обновим, если новый возраст прошел проверку
        }
    }

    public function subAge($years)
    {
        $newAge = $this->age - $years;

        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
}

$user = new User();
$user->setAge(26);

echo $user->age;
echo '<br>';

$user->addAge(5);
echo $user->age;
echo '<br>';
$user->subAge(2);
echo $user->age;








