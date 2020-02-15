<?php

class User
{
    public $name;
    public $age;

    public function show($str)
    {
        return $str . '!!!';
    }
}

$user = new User;
$user->name = 'Коля';
$user->age = 25;

echo $user->show('hello <br>');


